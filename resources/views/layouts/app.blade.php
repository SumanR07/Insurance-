<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title> 
    <meta name="description" content="@yield('meta_description')"> 
    <meta name="keywords" content="@yield('meta_keyword')"> 
    <meta name="author" content="ecomerce"> 
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="{{asset('asstes/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asstes/css/custom.css')}}" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>

    @livewireStyles
   
</head>
<body>
    <div id="app">
        @include('layouts.inc.admin.nav.navbar')

        <main class="py-1">
            @yield('content')
        </main>
    </div> 

    <script src="{{asset('asstes/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('asstes/js/bootstrap.bundle.min.js')}}"></script> 
    
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    
    <!-- <script> 
       document.addEventListener('livewire:load', function () {
        window.addEventListener('message', event => {
            if (event.detail) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(event.detail.text);
            } else {
                console.error('Event detail is undefined');
            }
        });
    });
    </script> -->

</body>  

</html>
