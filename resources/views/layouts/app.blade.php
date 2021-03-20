<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <style>
        body {
    background-image: url("https://image.freepik.com/free-photo/blue-wood-background-summer-beach-vertical_1101-2355.jpg");
    background-color: #00539cff;
    background-repeat: repeat-y;


    background-position: center, left;
 
  
    height: 400px;
    height: 100%;
    margin:42px;
    background-size: 100%
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: gray;
  text-align: center;
}



    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        
        <div class="container">
           @include('inc.messages') 
        <!--<main class="py-4"> -->
            @yield('content')
        </div>
        <!--</main> -->
    </div>

    <div class="footer">
        <p>© Copyright 2021 MB</p>
      </div>
      
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>



</html>
