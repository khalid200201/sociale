<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\post;
use App\Models\Comment;

use Illuminate\Http\Request;

class homecountroller extends Controller
{
   
    public function index(User $user1)
    {
        $user1->load('profile');
        $user = auth()->user();
        $followedUserIds = \DB::table('follow')
            ->where('user_id', '=', $user->id)
            ->pluck('follow_id')
            ->toArray(); // Use toArray() to get an array of followed user IDs
          
        if (!empty($followedUserIds)) {
            $posts = Post::whereIn('user_id', $followedUserIds)
            ->orWhere('user_id', $user->id)
            ->latest()
            ->paginate(10);
            return view('home.home', compact('posts', 'user'));
        } 
    }  
    public function loadMoreComments(Request $request) {
        
        // Render the HTML for the new comments
        $html = '';
        foreach ($comments as $comment) {
            $html .= '<input type="text" readonly name="comment" value="' . $comment->comment . '">';
        }
    
        return response()->json(['html' => $html]);
    }
    
public function send (User $user){
    $user = auth()->user();
    return view('vendor.Chatify.info', compact('user',));


}
   
}
