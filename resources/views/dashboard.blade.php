<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../assets/style/adminstyle.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


   </head>

    <body class="sb-nav-fixed">
        <!-- notification message -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#" >Anime List</a></li>
                        <li><a class="dropdown-item" href="{{route('dashboard') }}" >Items List</a></li>
                    </ul>
                </li>
            </ul>
            <div style="position: relative; z-index: 1; width: 100%;">
    <div style="display: flex; align-items: center; width: 100%;">
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style="width: 100%;">
            <div class="input-group" style="width: 100%;">
                <input type="text" class="form-control" id="search-input" placeholder="Search Anime Names">
                <ul id="suggestions" class="list-group" style="position: absolute; width: 100%; display: none; z-index: 2;"></ul>
            </div>
        </form>
    </div>
</div>

                <!-- <h4 class="mt-4">Dashboard</h4> -->
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('front.home') }}" >Main Page</a></li>
                        <li><a class="dropdown-item" href="index.php?logout='1'" >logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">


                    <div class="sb-sidenav-footer">
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <!-- <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Sale Details</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                            <h1>Animes</h1>
                            <form action="{{ route('add.name') }}" method="post" class="mt-3" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <label for="name" class="sr-only">Add Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Add Name" required>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </form>



                            <ul style="padding-top: 5px;" >
                            @foreach($users as $user)
                                <li style="padding-top: 5px;">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-primary text-white mb-4" >
                                            <div class="card-body">
                                                {{ $user->name }}
                                                <form action="{{ route('remove.name', ['id' => $user->id]) }}" method="post" class="mt-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Remove</button>
                                                </form>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">

                                                <div class="small text-white"><i class="fas fa-angle-right"></i>
                                                <!-- <a class="small text-white stretched-link" href="{{ route('front.home') }}">View Details</a></div> -->
                                            </div>
                                        </div
                                    </div>
                                </li>

                            @endforeach
                        </ul>






                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Dekho Pakistan TV</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
    document.getElementById('search-input').addEventListener('input', function () {
        const inputText = this.value.trim();
        if (inputText !== '') {
            fetchSuggestions(inputText);
        } else {
            hideSuggestions();
        }
    });

    function fetchSuggestions(query) {
        axios.get(`/search?q=${query}`)
            .then(response => showSuggestions(response.data))
            .catch(error => console.error('Error fetching suggestions:', error));
    }

    function showSuggestions(suggestions) {
        const suggestionsList = document.getElementById('suggestions');
        suggestionsList.innerHTML = '';

        suggestions.forEach(suggestion => {
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item';
            listItem.textContent = suggestion; // Replace with your actual column name
            suggestionsList.appendChild(listItem);
        });

        suggestionsList.style.display = 'block';
    }

    function hideSuggestions() {
        const suggestionsList = document.getElementById('suggestions');
        suggestionsList.innerHTML = '';
        suggestionsList.style.display = 'none';
    }
</script>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../script/adminscript.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../assets/demo/chart-area-demo.js"></script>
        <script src="../../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../../script/datatables-simple-demo.js"></script>
    </body>
</html>



