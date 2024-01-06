@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">

    <div class="md:w-1/4">
    @include('home.menuleft')
        </div>

    <div class="md:w-1/2 flex">
    @foreach($followedUsers as $users)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 px-2 pb-5"><a href="/profile/{{$users->id}}">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <img src="{{ asset('storage/' . $users->profile->image) }}" class="rounded-circle" />
              <span class='px-6'>{{$users->username}}</span>
            </div>
        </a>
       </div>
           @endforeach
        </div>
    </div>
</div>
@endsection
