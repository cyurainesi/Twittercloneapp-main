<?php

namespace App\Http\Controllers;

use App\Reply;
use App\suggestions;
use App\Comments;
use App\Tweet;
use App\User;


use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentsreplies=Reply::all();
        return view('reply.replies', compact('commentsreplies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tweets = Tweet::all()->count();
        $users = User::all()->count();
        $replies = Reply::all()->count();
        $comments = Comments::all()->count();
        $suggestions=suggestions::all();
        $suggestion=suggestions::all()->count();
        return view('profile.admin', compact(['tweets','users','comments','replies','suggestions','suggestion']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ttrib=request()->validate([
            'reply',
            'image' => '|file|mimes:jpeg,png,jpg,gif,svg,mp4',
            'gif'=> '|file|mimes:gif',
            'video'=>'file|mimes:mp4',
            ]);

            if($request->file('image') != null){
            $image = $request->file('image');
            $destinationPath = $request->file('image')->store('images');
            }

            $body=request('reply');

            if ( $body==null and $request->file('image') == null) {

                return back()->with('error', 'Something Went Wrong');
            }

        else{


            if($request->file('image') == null and $body !=null){

               $tweet= Reply::create([
                    'user_id'=>auth()->id(),
                    'tweet_id'=>request('tweet_id'),
                    'comment_id'=>request('comment_id'),
                    'reply'=>request('reply'),

                ]);

                return back()->with('success', 'Reply  Added Successful');
                }

                elseif($body == null and $request->file('image') != null){
                    $name = $request->image->getClientOriginalName();

                    $tweets= new Reply();
                    $tweets->user_id=auth()->id();
                    $tweets->tweet_id=request('tweet_id');
                    $tweets->request('comment_id');
                    $tweets->reply=request('reply');
                    $tweets->image= $image->move($destinationPath);
                    $tweets->save();

                    return back()->with('success', 'Reply  Added image Successful');
                }

                elseif ($body == null and $request->file('image') == null) {

                    return back()->with('error', 'Something Went Wrong');
                }
                elseif($body != null and $request->file('image') != null){
                    $tweets= new Reply();
                    $tweets->user_id=auth()->id();
                    $tweets->tweet_id=request('tweet_id');
                    $tweets->request('comment_id');
                    $tweets->image= $image->move($destinationPath);
                    $tweets->save();

                    return back()->with('success', 'Reply  Added image Successful');
                }


            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply, Request $request)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
