<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sita Interior</title>

    <!-- SEO (Basic) -->

    <meta name="description" content="Sita Interior – Industry standard interior design solutions">
    <meta name="keywords" content="Interior Design, Modular Kitchen, Home Interior">


    <!-- Tailwind CDN -->

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts (Industry standard) -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Font Awesome / Icons -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


    <link rel="stylesheet"
        href="https://unpkg.com/aos@2.3.1/dist/aos.css" />


    <!-- YOUR CUSTOM CSS -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-[Inter] bg-white text-gray-900">

    {{-- Popup 1 (on page load) --}}
    @include('components.popup.get-plan-popup')

    {{-- Popup 2 (opens after 1 min) --}}
    @include('components.popup.sac-popup')


    {{-- Navbar --}}
    @include('partials.navbar')


    {{-- Page Content --}}
    <main class="">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!-- ========================= -->
    <!-- YOUR CUSTOM JS -->
    <!-- ========================= -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- ========================= -->
    <!-- AOS Animation JS -->
    <!-- ========================= -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>

</body>

</html>