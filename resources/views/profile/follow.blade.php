<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<!-- Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

<!-- Vite Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')

<div class="md:w-1/2">
    <div class=" ">
        <div class="row">
            <div class="">
                @foreach($followedUsers as $user)
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 px-2 pb-5">
                        <a href="/profile/{{$user->id}}">
                            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                <img src="{{ asset('storage/' . $user->profile->image) }}" style="width:100px" />
                                <span class='px-6'>{{$user->username}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
