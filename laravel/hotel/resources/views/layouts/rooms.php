<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
   <link rel="stylesheet" href="/hotel/resources/css/app.css">
   <title>Hotel</title>
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
               <div class="container">
                    <a class="navbar-brand" href="http://localhost/hotel/resources/views/layouts/app.blade.php">
                        Hotel App
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/hotel/resources/views/layouts/app.blade.php">Home</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="http://localhost/hotel/resources/views/layouts/rooms.php">Rooms</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="http://localhost/hotel/resources/views/layouts/facilities.php">Facilities</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/rooms">Room Management</a>
                            </li>

                        </ul>
                        

                        
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container mt-4">
                <h2>Available Rooms</h2>
                <div class="row">
           
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/hotel/resources/img/room1.jpeg" class="card-img-top" alt="Room Image" style="height: 277px;">
                            <div class="card-body">
                                <h5 class="card-title">Room 101</h5>
                                <p class="card-text">Deluxe Suite.</p>
                                <a href="rooms/room101.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/hotel/resources/img/room2.jpg" class="card-img-top" alt="Room Image" style="height: 277px;">
                            <div class="card-body">
                                <h5 class="card-title">Room 102</h5>
                                <p class="card-text">Luxury Suite.</p>
                                <a href="rooms/room102.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/hotel/resources/img/room3.jpeg" class="card-img-top" alt="Room Image" style="height: 277px;">
                            <div class="card-body">
                                <h5 class="card-title">Room 103</h5>
                                <p class="card-text">Premium Suite.</p>
                                <a href="rooms/room103.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/hotel/resources/img/room4.jpg" class="card-img-top" alt="Room Image" style="height: 277px;">
                            <div class="card-body">
                                <h5 class="card-title">Room 104</h5>
                                <p class="card-text">Family Suite.</p>
                                <a href="rooms/room104.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/hotel/resources/img/room5.jpeg" class="card-img-top" alt="Room Image" style="height: 277px;">
                            <div class="card-body">
                                <h5 class="card-title">Room 105</h5>
                                <p class="card-text">Penthouse Suite.</p>
                                <a href="rooms/room105.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/hotel/resources/img/room6.jpeg" class="card-img-top" alt="Room Image" style="height: 277px;">
                            <div class="card-body">
                                <h5 class="card-title">Room 106</h5>
                                <p class="card-text">Presidential Suite.</p>
                                <a href="rooms/room106.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </main>

    <footer class="footer mt-auto py-3 bg-light">
            <div class="container text-center">
                <p>&copy; Bondu Hotel &nbsp &nbsp &nbsp 16th Avenue &nbsp &nbsp Contact 31+ 063247924</p>
            </div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
