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
        <img src="/hotel/resources/img/room6.jpeg" alt="roompic">
    </div>
    <div class="room-description">
        <h2>Presidential Suite - Room 106</h2>
                <p>Welcome to the epitome of luxury, our Presidential Suite, Room 106. This suite is a sanctuary of elegance and sophistication, designed to cater to the distinguished tastes of our esteemed guests.</p>
                <p>Features:</p>
                <ul>
                    <li>Sumptuous King-size Bed with Opulent Bedding</li>
                    <li>Expansive Living Area with Panoramic Views</li>
                    <li>Lavish En-suite Bathroom with Spa Amenities</li>
                    <li>State-of-the-Art Entertainment Center with Smart TV</li>
                    <li>High-Speed Internet and Executive In-room Workspace</li>
                    <li>Premium Coffee and Tea Facilities</li>
                    <li>Exclusive Access to a Private Terrace with Breathtaking Views</li>
                    <li>Dedicated Concierge Service for Unmatched Personalized Assistance</li>
                    <li>Complimentary VIP Amenities and Services</li>
                </ul>
                <p>Indulge in the unparalleled luxury and personalized service of our Presidential Suite. Whether you're celebrating a special occasion or conducting high-profile business, Room 106 promises an extraordinary stay.</p>

     
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
