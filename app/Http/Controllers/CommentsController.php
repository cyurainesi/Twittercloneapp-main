<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;
use App\Tweet;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweetcomments=Comments::all();
        return view('comments.comment', compact('tweetcomments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tweet $tweet , Request $request)
    {
        $ttrib=request()->validate([
            'comment'=>'',
            'image' => '|file|mimes:jpeg,png,jpg,gif,svg,mp4',
            'gif'=> '|file|mimes:gif',
            'video'=>'file|mimes:mp4',
            ]);

            if($request->file('image') != null){
            $image = $request->file('image');
            $destinationPath = $request->file('image')->store('images');
            }
            $body=$ttrib['comment'];

            if ( $body==null and $request->file('image') == null) {

                return back()->with('error', 'Something Went Wrong');
            }

        else{


            if($request->file('image') == null and $body !=null){

                Comments::create([
                    'user_id'=>auth()->id(),
                    'tweet_id'=>request('tweet_id'),
                    'comment'=>request('comment')

                ]);

                return back()->with('success', 'Comment  Added Successful');
                }

                elseif($body == null and $request->file('image') != null){
                    $name = $request->image->getClientOriginalName();

                    $tweets= new Comments();
                    $tweets->user_id=auth()->id();
                    $tweets->tweet_id=request('tweet_id');
                    $tweets->comment=request('comment');
                    $tweets->image= $image->move($destinationPath);
                    $tweets->save();

                    return back()->with('success', 'comment  Added image Successful');
                }

                elseif ($body == null and $request->file('image') == null) {

                    return back()->with('error', 'Something Went Wrong');
                }
                elseif($body != null and $request->file('image') != null){
                    $tweets= new Comments();
                    $tweets->user_id=auth()->id();
                    $tweets->tweet_id=request('tweet_id');
                    $tweets->image= $image->move($destinationPath);
                    $tweets->save();

                    return back()->with('success', 'comment  Added image Successful');
                }


            }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
