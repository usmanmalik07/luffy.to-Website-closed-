<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogins;
use App\Models\registeruser;
use Illuminate\Support\Facades\DB;
use App\Models\animenames;
use App\Models\itemnames;

class userctrl extends Controller

{
            // Print Name
            public function printName()
            {

                $users = animenames::all();
                return view('dashboard', ['users' => $users]);
            }

            // ADD NAME
            public function addName(Request $request)
            {
                $request->validate([
                    'name' => 'required|string',
                ]);

                Animenames::create([
                    'name' => $request->name,
                ]);

                return redirect()->route('dashboard')->with('success', 'Anime added successfully.');
            }

            // REMOVE NAME
            public function removeName($id)
            {
                // Remove the name from the database based on the given $id
                Animenames::destroy($id);

                return redirect()->route('dashboard')->with('success', 'Name removed successfully.');
            }


            // Print Item
            public function printItem()
            {
                $items = itemnames::all();
                return view('printItem', ['items' => $items]); // Corrected to 'items'
            }


            //Add item
            public function addItem(Request $request)
            {
                    $request->validate([
                        'name' => 'required|string',
                    ]);

                    itemnames::create([
                        'name' => $request->name,
                    ]);

                    return redirect()->route('dashboard')->with('success', 'Anime added successfully.');
            }

                // REMOVE ITEM

                public function removeItem($id)
                {
                // Remove the name from the database based on the given $id
                itemnames::destroy($id);

                return redirect()->route('dashboard')->with('success', 'Name removed successfully.');
                }


                //Search

                public function search(Request $request)
                {
                    $query = $request->input('q', '');

                    $results = Animenames::where('name', 'LIKE', '%' . $query . '%')
                        ->pluck('name')
                        ->toArray();

                    return response()->json($results);
                }

                //Login
                public function indexlogin()
                {
                    return
                        view('login');
                }
                //Signup
                public function signup()
                {
                    return
                        view('signup');
                }
                //Dashboard
                public function viewdashboard()
                {
                    if (session()->has('user_email')) {
                        return        view('dashboard');
                    } else {

                        return redirect('login');
                    }
                }


                public function store(Request $request)
                {
                    if ($request->isMethod('post')) {
                        $registeruser = new registeruser();

                        $rules = [
                            'name' => 'required|string|max:255',
                            'email' => 'required|email|unique:users',
                            'password' => 'required|string|min:6',
                        ];

                        // Validate the input
                        $request->validate($rules);

                        $input = $request->all();
                        // $registeruser->name = $request->input('name');
                        // $registeruser->email = $request->input('email');
                        // $registeruser->password = bcrypt($request->input('password'));

                        $registeruser->name = $request->input('name');
                        $registeruser->email = $request->input('email');
                        $registeruser->password = $request->input('password');
                        $registeruser->save();

                        return redirect('front.shop');
                    } else return view('signup');
                }


    function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $email = request('email');
            $password = request('password');
            $user = userlogins::where('email', $email)->where('password', $password)->get();
            if (count($user) > 0) {


                $request->session()->put('user_email', $user[0]->email);
                $request->session()->put('user_name', $user[0]->name);


                return redirect('/dashboard');
            } else {
                return view('login');
            }
        } else return view('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }


}
