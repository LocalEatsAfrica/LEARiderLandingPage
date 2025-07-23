<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv=“refresh” content="{{config('session.lifetime') * 60}}">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Favicon -->
      <link href="favicon/favicon.ico" rel="icon" type="image/x-icon">
     <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
   <!-- stylesheet -->
      <link rel="stylesheet" href="{{ asset('/front/css/driver.css?v=echo filemtime();') }}">
   <link rel="stylesheet" href="{{ asset('/front/css/style.css?v=echo filemtime();') }}">
    <title>LocalEats Africa</title>
</head>

<body>
      @yield('content')  
          <!-- Footer -->
    <footer class="bg-success text-white py-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <div>
                <h5 class="fw-bold">LocalEats Africa</h5>
                <p class="small mt-2 mb-0">&copy; 2025 LocalEats Africa. All rights reserved.</p>
            </div>
            <div class="mt-4 mt-md-0">
                <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                <a href="#" class="text-white text-decoration-none me-3">Support</a>
                <a href="#" class="text-white text-decoration-none">Terms</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>