<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Tweet;
use App\Like;

use Illuminate\Http\Request;

class TweetLikesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Tweet $tweet , Request $request)
    {

        $user=auth()->user();
        $tweet->like($user);

        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $user=auth()->user();
        $tweet->dislike($user);

        return back();
    }


    public function likecomment(Comments $comments , Request $request)
    {
        $user=auth()->user();
        $comments->likedcomment($user);
        dd($comments);
        return back();
    }
}
