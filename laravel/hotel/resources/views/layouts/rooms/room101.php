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
<body class="room101">
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
           <div class="container">
                    <a class="navbar-brand" href="http://localhost:3000/hotel/resources/views/layouts/app.blade.php">
                        Hotel App
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:3000/hotel/resources/views/layouts/app.blade.php">Home</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="http://localhost:3000/hotel/resources/views/layouts/rooms.php">Rooms</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="http://localhost:3000/hotel/resources/views/layouts/facilities.php">Facilities</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/rooms">Room Management</a>
                            </li>

                        </ul>
                        
                    </div>
                </div>
            </nav>
        </header>
<div class="room-container">
    <div class="roomimg">
        <img src="/hotel/resources/img/room1.jpeg" alt="roompic">
    </div>
    <div class="room-description">
        <h2>Deluxe Suite - Room 101</h2>
        <p>Welcome to our Deluxe Suite, Room 101! This elegantly designed room offers a perfect blend of comfort and style, providing a luxurious escape for your stay.</p>
        <p>Features:</p>
        <ul>
            <li>Spacious King-sized Bed with Premium Linens</li>
            <li>Private Balcony with Panoramic City Views</li>
            <li>Luxurious En-suite Bathroom with Jacuzzi</li>
            <li>High-Speed Wi-Fi and Smart TV</li>
            <li>24/7 Room Service and Concierge</li>
        </ul>
        <p>Indulge in the ultimate relaxation experience with our plush amenities and personalized services. Whether you're unwinding after a long day of meetings or enjoying a romantic getaway, Room 101 is the perfect choice for an unforgettable stay.</p>
        
  
        <button class="book-now-btn">Book Now</button>
    </div>
</div>


      <footer class="footer mt-auto py-3 bg-light">
            <div class="container text-center">
                <p>&copy; Bondu Hotel &nbsp &nbsp &nbsp 16th Avenue &nbsp &nbsp Contact 31+ 063247924</p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
