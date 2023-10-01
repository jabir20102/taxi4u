<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Taxi4u</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
   CSS
   ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>
          
        /* Style the suggestion list */
        .suggestions {
          list-style-type: none;
          padding: 0;
          margin: 0;
          border: 1px solid #ccc;
          border-top: none;
          position: absolute;
          /* width: 100%; */
          max-height: 150px; Set a maximum height for the suggestions
          overflow-y: auto; /* Enable vertical scrolling if needed */
        }
      
        /* Style individual suggestion items */
        .suggestions li {
          padding: 10px;
          cursor: pointer;
          background-color: #f5f5f5;
        }
      
        /* Highlight suggestion items on hover */
        .suggestions li:hover {
          background-color: #e0e0e0;
        }
      </style>
      
    {{-- for the places --}}
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>

</head>

<body>

    @include('layouts.navigation')

    @include('layouts.flashMessages')

    @yield('content')
    
    @include('layouts.footer')

    @yield('script')

</body>

</html>
