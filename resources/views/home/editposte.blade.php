<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="relative group">
  <button class="bg-white-300 text-white px-1 py-1 rounded-lg hover:bg-gray-500">
    <img src="/svg/more.png" style="max-width: 30px;padding:5px" alt="">
  </button>
  <ul class="hidden absolute left-0 mt-2 space-y-2 bg-white border border-gray-200 text-black group-hover:block">
  
  <li>
  <input type="hidden" value="{{ $user->id }}" id="usert">
    <button id="archive"  onclick='ok({{ $post->id }})'   class="archive block px-4 py-2 hover:bg-gray-100" ">
       Archive
    </button>
</li>
    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Single</a></li>
  </ul>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


function ok( post_id ){
    $.ajax({
            url: "{{ route('Archive') }}",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                post_id: post_id
            },
            success: function (data) {
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
}
   $(document).ready(function () {

   


});

</script>