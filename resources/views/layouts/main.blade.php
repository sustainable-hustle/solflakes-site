<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('meta_title') | Solflakes NFT</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased font-sans">
    <div class="flex flex-col min-h-screen">
        <div class="flex-initial">
            @include('partials.header')
        </div>
        <div class="flex-grow">
            @yield('content')
        </div>
        <div class="flex-initial">
            @include('partials.footer')
        </div>
    </div>
</body>

<script src="//unpkg.com/alpinejs" defer></script>
</html>
