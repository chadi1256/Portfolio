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

          <div class="facility-container">
            <div class="facility-img">
                
                <img src="/hotel/resources/img/hotel2.jpg" alt="facility1pic">
            </div>
            <div class="facility-description">
    <h2>Welcome to Our Hotel</h2>
    <p>Experience the epitome of comfort and luxury at our hotel. Immerse yourself in a world of hospitality where every detail is designed to make your stay unforgettable.</p>
    <p>Hotel Highlights:</p>
    <ul>
        <li>Elegant and Comfortable Rooms</li>
        <li>Exceptional Dining Experience</li>
        <li>State-of-the-Art Facilities</li>
        <li>Spacious Conference Rooms</li>
        <li>24/7 Room Service</li>
    </ul>
    <p>Discover the perfect blend of sophistication and warmth. Whether you're here for business or leisure, we ensure a memorable stay tailored to your needs.</p>
  
               <a href="/hotel/resources/views/layouts/rooms.php" class="book-a-room-now-btn">Book a room now</a>

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
