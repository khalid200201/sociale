<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class amicountroller extends Controller
{
public function index(User $user1)
{
        $user1->load('profile');
        $user = auth()->user();
        $followedUserIds = \DB::table('follow')
            ->where('user_id', '=', $user->id)
            ->pluck('follow_id')
            ->toArray();
            
            $followedUsers = User::join('follow', 'users.id', '=', 'follow.follow_id')
            ->whereIn('follow.user_id', $followedUserIds)
            ->select('users.id')
            ->get();

        // Convert the collection to an array
        $followedUsers = User::whereIn('id', $followedUserIds)->get();

            
    

        return view("ami.ami", compact('followedUsers'));
    
}


    
}
