<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
<nav class="">
        <div class="bg-gray-300 p-4 text-white fixed w-full z-10 container mx-auto">
            <!-- Your Navbar Content -->
            <img src="/svg/logo.jpg" class="rounded-full max-w-10 pr-3" style="max-width:60px" alt="">

            <a href="#" class="ml-4">about</a>
            <a href="#" class="ml-4">Services</a>
            <a href="#" class="ml-4">Contact</a><br>
      <span id="currentYear">
    All rights are reserved ©
</span>

<script>
    // JavaScript to dynamically set the current year
    var currentYear = new Date().getFullYear();
    document.getElementById('currentYear').innerHTML += ' ' + currentYear;
</script>
        </div>
        <span>
 ©</span>
    </nav>

    <!-- Content Section -->
  