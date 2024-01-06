<div class="container">

<head>
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
    <style>
        /* Custom alert window styles */
        #custom-alert {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        #alert-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
       
#ladox {
    display: none; /* Initially hide the alert */
}
    </style>

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
</head>
<div class="  bg-slate-500 border-gray-500 mb-2" style="max-width: 500px;" >


<div class="flex items-center">
  <img src="{{ asset('storage/' . auth()->user()->profile->image) }}" style="max-width: 50px;" class="rounded-full m-2" alt="">
  <input type="text" name="desc" class="rounded-full ml-2 flex-grow" placeholder="Quoi de Neuf .{{auth()->user()->name}}">
</div>
<div class='flex ml-9'>
  <div class="w-1/2  ml-11"><button onclick="openAlert()" id="show-page"><img src="svg/photo.png" style="max-width:40px" alt=""></button></div>
 
  <div class="w-1/5"><button onclick='button()' id="slm"><img src="svg/para.png" style="max-width:40px" alt=""></button></div>
</div>

   
</div>
<form action="{{ route('post.ladox') }}" method="post" enctype="multipart/form-data">
@csrf
<div id="custom-alert" class="fixed inset-0 flex items-center justify-center z-50">
    <div id="alert-box" class="bg-white w-96 p-6 rounded-lg shadow-lg">
        <form class="space-y-4">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-violet-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01"></path>
                </svg>
            </div>

            <input type="text" name='caption' class="w-full px-4 py-2 rounded-lg bg-violet-50 text-violet-700 focus:outline-none focus:bg-violet-100 text-sm font-semibold" placeholder="Enter text" />

            <label class="w-full flex items-center px-4 py-2 rounded-lg border border-violet-200 text-violet-700 hover:bg-violet-100 focus:outline-none focus:bg-violet-100">
                <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M12 14a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        <path fill-rule="evenodd" d="M12 1a1 1 0 011 1v10a1 1 0 01-2 0V2a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                Choose profile photo
                <input type="file" name="image" class="hidden" />
            </label>
        </form>
      
<div class="mt-4">
    <button onclick="submitForm()" id="sv" class="w-full px-4 py-2 rounded-lg bg-violet-500 text-white font-semibold hover-bg-violet-600 focus:outline-none">Send</button>
</div>
</div>
</form>
<script>
    function openAlert() {
        document.getElementById('custom-alert').style.display = 'flex';
    }
    function closeAlert() {
        document.getElementById('custom-alert').style.display = 'none';
    }
 
</script>

<div class="mt-4">
<div class="mt-4">
    <img src="svg/spr.png"  style="max-height:45px;"alt="Close" onclick="closeAlert()" style="cursor: pointer;">
    
</div>
</div>
    </div>
</div>


    @csrf
    <div id="ladox" class="fixed inset-0 flex items-center justify-center z-50">
        <div id="alert-box" class="bg-white w-96 p-6 rounded-lg shadow-lg">
            <form class="space-y-4">
                <div class="text-center">
                   <h1>Affichage Post</h1>
                </div>

                <div class="w-64">
  <label for="select" class="block text-sm font-medium text-gray-700">duree  post</label>
  <div class="relative mt-1">
    <select id="select" name="select" class="block appearance-none w-full bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 leading-5 text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
      <option value="option1">1 day</option>
      <option value="option2">1 week</option>
      <option value="option3">limite</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
    </div>
  </div>
</div>
<label class="block text-sm font-medium text-gray-700" >share with :</label>
            </form>
          
            <div class="mt-4">
                <button onclick="submitForm()" id="sv" class="w-full px-4 py-2 rounded-lg bg-violet-500 text-white font-semibold hover-bg-violet-600 focus:outline-none">confirme</button>
            </div>
        </div>
    <script>
    function button() {
        document.getElementById('ladox').style.display = 'flex';
    }
   
      function closea() {
        document.getElementById('ladox').style.display = 'none';
    }
    </script>
    <div class="mt-4">
        <div class="mt-4">
            <img src="svg/spr.png" style="max-height:45px;" alt="Close" onclick="closea()" style="cursor: pointer;">
        </div>
    </div>
</div>