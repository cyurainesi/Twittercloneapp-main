<?php

namespace App\Http\Controllers;
use App\Search;
use Illuminate\Http\Request;
use App\Comments;
use App\Tweet;
use App\User;
use App\Reply;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
   public function store(Request $request)
   {
      $search= request('search');
       $toptweets=Tweet::all()->count();
        $users=User::all();
        $tweetcomments=Comments::all();
        $commentsreplies=Reply::all();
        $suggestedusers=User::orderBy('updated_at', 'desc')->paginate(3);
        $user=auth()->user();
        $tweets=DB::select(" SELECT * FROM tweets  where body LIKE '%$search%'");
        $userresult=DB::select(" SELECT * FROM users  where username LIKE '%$search%'");

        return view('search.results', compact(['search','userresult','tweets','user','suggestedusers','commentsreplies','tweetcomments','users','toptweets']));


   }

}
