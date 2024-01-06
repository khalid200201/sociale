<?php

      namespace App\Http\Controllers;
      
      use App\Models\archive;
      use Illuminate\Http\Request;
      use Illuminate\Support\Facades\Auth;
      use App\Models\user;

      class ArchiveController extends Controller
      {
        public function index(Request $request)
        {

            $data = \DB::table('archive')->select('id')
     ->where('user_id', '=', auth()->user()->id)
     ->where('post_id', '=', $request->post_id)
     ->first(); 
if($data) {            return response()->json(['message' => 'Data false']);

} else {
            \DB::table('archive')->insert(
                ['user_id' =>  auth()->user()->id, 'post_id' => $request->post_id]
            );

        return response()->json(['message' => 'Data inserted successfully']);
  
        }
    
    }

    public function archive(archive $archive){
        $id=Auth::user()->id;

        
        $result = \DB::table('archive')
        ->join('posts', 'archive.post_id', '=', 'posts.id')
        ->select('archive.*', 'posts.*')
        ->where('archive.user_id', '=', $id)
        ->get();

    return view('archive.archive', ['result' => $result]);

}
public function delte( $ok){
   $id=Auth::user()->id;

   \DB::table('archive')->where([
    'post_id' => $ok,
    'user_id' => $id
])->delete();
    return response()->json(['message' => 'Data deleted successfully']);

}
      }