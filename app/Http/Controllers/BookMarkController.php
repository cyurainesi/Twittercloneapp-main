<?php

namespace App\Http\Controllers;

use App\BookMark;
use App\Tweet;
use Illuminate\Http\Request;

use DB;

class BookMarkController extends Controller
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
        $user=auth()->user()->username;
        $toptweets=Tweet::all()->count();
        $trendtweets=Tweet::all()->count();
        $tweets=auth()->user()->bookmarktimeline();
        return view('bookmark.app',compact(['tweets', 'user','trendtweets','toptweets']));
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
    public function store(Request $request)
    {
        $save=BookMark::updateOrCreate([
            'user_id'=>auth()->user()->id,
            'tweet_id'=>request('tweet_id')
        ]);
        return back()->with('success', 'BookMark  added Successful');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function show(BookMark $bookMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function edit(BookMark $bookMark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookMark $bookMark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookMark  $bookMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookMark $bookMark)
    {

            $user_id=auth()->user()->id;
            $tweet_id=request('tweet_id');

        $dbd=DB::delete("DELETE from book_marks where tweet_id = $tweet_id and user_id=?", [$user_id]);
        return back()->with('error', 'BookMark  removed Successful');
    }

    public function destroyall(BookMark $bookMark)
    {

            $user_id=auth()->user()->id;
            $tweet_id=request('tweet_id');

        $dbd=DB::delete("DELETE from book_marks where  user_id=?", [$user_id]);
        return back()->with('error', 'All BookMarks  removed Successful');
    }


}
