@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">

    <div class="md:w-1/4">
    @include('home.menuleft')
        </div>

<div class="md:w-1/2 flex">
            @foreach($result as $user)
            <div class="w-60 h-60 mx-auto bg-white p-4 border rounded-md relative ">
    <img src="/storage/{{$user->image}}" alt="Your Image" class="w-40 h-auto rounded">
    <button onclick="ok({{$user->id}})" class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded">Delete</button>
    <span class='px-6'>{{$user->caption}}</span>

</div>
           @endforeach
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function ok(ok) {
        $.ajax({
            url: '/Ar/' + ok,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log(data.message);
                // You can update the UI here if needed
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>



@endsection
