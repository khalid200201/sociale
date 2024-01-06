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
<div class="container">
    <div class="flex " style="display:block">
        <div  class="menu  bg-white p-4 text-center ">
            <ul>
            <li ><a href="/profile/{{auth()->user()->id}}"  style="display:inline-flex" class="block text-black no-underline text-lg p-2 pt-2 transition duration-300 hover:bg-gray-700 hover:text-white"><img src="{{ asset('storage/' . auth()->user()->profile->image) }}" style="max-width:40px;" class="rounded-circle" alt=""><span>{{auth()->user()->name}}</span></a></li>
            <li><a href="/ami" class="block text-black no-underline text-lg p-2 pt-2 transition duration-300 hover:bg-gray-400 hover:text-white">Ami</a></li>
            <li><a href="/Ar" class="block text-black no-underline text-lg p-2 pt-2 transition duration-300 hover:bg-gray-400 hover:text-white">Archive</a></li>
            <li><a href="/Market" class="block text-black no-underline text-lg p-2 pt-2 transition duration-300 hover:bg-gray-400 hover:text-white">Market</a></li>
            <li><a href="#" class="block text-black no-underline text-lg p-2 pt-2 transition duration-300 hover:bg-gray-400 hover:text-white">Job</a></li>

            </ul>
        </div>
    </div>
</div>
