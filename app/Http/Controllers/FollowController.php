<?php

namespace App\Http\Controllers;

use App\Follows;
use Illuminate\Http\Request;
use App\Notifications\Follower;
use App\User;
use DB;

class FollowController extends Controller
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
        $usertofollow=User::all();
        return view('explore.users')->with('usertofollow', $usertofollow);
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
    public function store(User $user)
    {
        if (
            auth()
                ->user()
                    ->following($user))
                    {
                        auth()
                        ->user()
                            ->unfollow($user);


        }
        else{

            auth()
                ->user()
                    ->follow($user);

                #$user->notify(New Follower($user));
        }
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showfollowers(User $user)
    {


        $follower=auth()->user()->follower($user);
        return view('friends.followers',compact(['user','follower']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showfollowing(User $user)
    {

        $following=auth()->user()->follows($user);
        return view('friends.following',compact('user','following'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
