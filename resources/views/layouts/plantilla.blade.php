<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CDN DE TAILWIND --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title>@yield('title')</title>
    <!-- favicon -->
    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- headers -->
    <!-- nav -->

    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')

    <!-- <footer> -->
    <!-- </script> -->
</body>

</html>
