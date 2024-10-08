<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>@yield('title') &mdash; Stisla</title>




    <script async
        src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];


        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());


        gtag('config', 'UA-94034622-3');
    </script>
    <!-- END GA -->
</head>
</head>


<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Header -->
            @include('component.header')


            <!-- Sidebar -->
            @include('component.navbar')


            <!-- Content -->
            @yield('main')


            <!-- Footer -->
            @include('component.footer')




            @stack('style')
            @include('component.style')


            @stack('scripts')
            @include('component.script')


        </div>
    </div>


   
</body>


</html>
