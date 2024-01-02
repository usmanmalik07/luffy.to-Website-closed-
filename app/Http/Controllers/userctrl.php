<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogins;
use App\Models\registeruser;
use Illuminate\Support\Facades\DB;
use App\Models\animenames;

class userctrl extends Controller
{
    public function printName()
    {

        $users = animenames::all();
        return view('dashboard', ['users' => $users]);
    }
    public function addName(Request $request)
{
    // Validate the request
    $request->validate([
        'new_name' => 'required|string|max:255',
    ]);

    // Add the new name to the database
    Animenames::create(['name' => $request->input('new_name')]);

    return redirect()->route('dashboard')->with('success', 'Name added successfully.');
}

public function removeName($id)
{
    // Remove the name from the database based on the given $id
    Animenames::destroy($id);

    return redirect()->route('dashboard')->with('success', 'Name removed successfully.');
}
    public function indexlogin()
    {
        return
            view('login');
    }

    public function signup()
    {
        return
            view('signup');
    }
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
            
            $input = $request->all();
            
            $registeruser->name = $request->input('name');
            $registeruser->email = $request->input('email');
            $registeruser->password = $request->input('password');
            $registeruser->save();
            return redirect('indexlogin');
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
