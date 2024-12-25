<!DOCTYPE html>
<html lang="hu">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Állásportál</title>
   <link rel="stylesheet" href="{{ asset('styles/stlye.css')}}">
   <link rel="stylesheet" href="{{ asset('styles/modal.css')}}">
</head>
<body>
    <div>
        <nav>
             @include('public.menu_layout')
        </nav>
        <header>
            @include('public.header_layout')
        </header>
        <div class="body_div">
            @yield('dynamic_content')
        </div>
        <footer>
                @include('public.footer_layout')
        </footer>
    </div>
</body>
</html>
<script src="{{ asset('javascript/js_dropdown.js') }}"></script>
