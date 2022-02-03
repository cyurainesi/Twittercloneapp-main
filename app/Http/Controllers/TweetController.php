<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Tweet;
use App\User;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use App\Notifications\TweetAdded;

use DB;
class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {



        #$toptweets= DB::select('SELECT COUNT(id) ids
                                #FROM tweets
                                #GROUP BY user_id;');
        $toptweets=Tweet::all()->count();
        $users=User::all();
        $tweetcomments=Comments::all();
        $commentsreplies=Reply::all();
        $suggestedusers=User::orderBy('updated_at', 'desc')->paginate(3);
        $user=auth()->user();
        $alltweets=DB::table('tweets')->paginate(30);
        $tweets=auth()->user()->timeline();
        $bothvariables=['tweets','trendtweets','alltweets','users','auth','user','suggestedusers','tweetcomments','toptweets','commentsreplies'];

        return view('home', compact($bothvariables));
    }

    public function store(User $user, Request $request )
    {
        $ttrib=request()->validate([
            'body'=>'',
            'image' => '|file|mimes:jpeg,png,jpg,svg',
            'gif'=> '|file|mimes:gif,mp4,MP4,M4V,MP4V,3G2,3GP2,3GP,3GPP,MOV,AVI,MP3',
            ]);

            if($request->file('gif') != null){
                $gif = $request->file('gif');
                $destinationPath = $request->file('gif')->store('images');
                }

            if($request->file('image') != null){
            $image = $request->file('image');
            $destinationPath = $request->file('image')->store('images');
            }
            $body=$ttrib['body'];

            if ( $body==null and $request->file('image') == null) {

                return back()->with('error', 'Something Went Wrong');
            }

        else{


            if($request->file('image') == null and $body !=null){

               $tweet= Tweet::create([
                    'user_id'=>auth()->id(),
                    'body'=>request('body')

                ]);

                #$user->notify(new TweetAdded($tweet));

                return back()->with('success', 'Tweet  Added Successful');
                }

                elseif($body == null and $request->file('image') != null){
                    $name = $request->image->getClientOriginalName();

                    $tweet= new Tweet;
                    $tweet->user_id=auth()->id();
                    $tweet->body=request('body');
                    $tweet->image= $image->move($destinationPath);
                    $tweet->save();
                   # $user->notify(new TweetAdded($tweet));

                return back()->with('success', 'Tweet  Added image Successful');
                }

                elseif ($body == null and $request->file('image') == null) {
                    return back()->with('error', 'Something Went Wrong');
                }
                elseif($body != null and $request->file('image') != null){
                    $tweet= new Tweet;
                    $tweet->user_id=auth()->id();
                    $tweet->image= $image->move($destinationPath);
                    $tweet->save();
                   # $user->notify(new TweetAdded($tweet));
                }

                elseif($body == null and $request->file('image') == null and $request->file('gif') != null ){
                    $tweet= new Tweet;
                    $tweet->user_id=auth()->id();
                    $tweet->gif= $gif->move($destinationPath);
                    $tweet->save();
                   # $user->notify(new TweetAdded($tweet));
                }


            }
        }

    public function find($id)
    {
        $toptweets=Tweet::all()->count();
        $users=User::all();
        $tweetcomments=Comments::all();
        $commentsreplies=Reply::all();
        $suggestedusers=User::orderBy('updated_at', 'desc')->paginate(3);
        $user=auth()->user();
        $tweet=Tweet::Find($id);
        return view('tweets.open', compact(['tweet','user','suggestedusers','commentsreplies','tweetcomments','users','toptweets']));
    }

    public function exprlore(User $user)
    {

        #$toptweets= DB::select('SELECT COUNT(id) ids
         #                       FROM tweets
          #                      GROUP BY user_id;');
        $trendtoptweets=Tweet::orderBy('updated_at','desc')->paginate(3);

        $suggestedusers=User::orderBy('updated_at', 'desc')->paginate(3);
        $alltweets=DB::table('tweets')->paginate(20);
        $users=User::all();
        $user=User::all();
        $toptweets=Tweet::all()->count();
        $tweets=auth()->user()->timeline();
        $bothvariables=['tweets','alltweets','users','user','suggestedusers','toptweets','trendtoptweets'];
        return view('explore.app',compact($bothvariables));
    }



    public function destory(User $user)
    {
            $user_id=auth()->user()->id;
            $tweet_id=request('tweet_id');

        $dbd=DB::delete("DELETE from tweets where id = $tweet_id and user_id=?", [$user_id]);
        return back()->with('error', 'Tweet  removed Successful');
    }

}
