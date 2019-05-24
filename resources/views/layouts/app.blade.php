<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CeRLS Library') }}</title>

    {{-- CDN JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            {{-- eND OF CDN JQUERY --}}
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- CDN VERSION OF BOOTSTRAP --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    {{-- END OF CDN VERSION --}}

    <link href="{{ asset('OwlCarousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OwlCarousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    
        @include('inc.nav')
        <div class="container">
            @include('inc.messages')
            
            @yield('content')
             </div>
       
  
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="{{ asset('OwlCarousel/dist/owl.carousel.min.js') }}"></script>
    
      <script>$(document).ready(function() {
 
        $(".owl-carousel").owlCarousel({
       
            navigation : true, // Show next and prev buttons
       
            slideSpeed : 300,
            paginationSpeed : 400,
       
            items : 2, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: true,
            itemsMobile : true,
            loop:true,
    margin:10,
    autoplay:true
       
        });
       
      });</script>

      <script>
      // Open the full screen search box 
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box 
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
      </script>
      
</body>
</html>
