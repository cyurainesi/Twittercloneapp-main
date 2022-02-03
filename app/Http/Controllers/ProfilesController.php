<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tweet;
use App\Comments;
use DB;
use App\suggestions;
use Illuminate\Contracts\Validation\Rule;
use Symfony\Contracts\Service\Attribute\Required;

class ProfilesController extends Controller
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
        $users=User::all();
        return view('users.app', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user_id=$user->id;
        $users=User::all();
        $tweetcomments=Comments::all();
        $suggestedusers=User::orderBy('updated_at', 'desc')->paginate(3);
        $tweetscount = Tweet::where('user_id', $user_id)->count();
        $tweets= Tweet::where('user_id', $user_id);
        $following=auth()->user()->followinglist($user)->count();
        $follower=auth()->user()->follower($user)->count();

        return view('profile.app',compact(['user','users','tweets','tweetscount','following','follower','suggestedusers','tweetcomments']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if($user->is(auth()->user()))
        {

          return view('profile.edit',compact('user'));
        }
        else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user )
    {
        $attributtes=request()->validate([
            'username'=>[
                'string','required', 'max:25', 'alpha_dash',],
                'bio'=>['max:255'],
                'website'=>['max:255'],
                'birthdate'=>['date'],
                'name'=>['string', 'required','max:255'],
                'email'=>['email','required',],
                'password'=>['string', 'required','min:8','max:255,','confirmed']
        ]);

        $website=request('website');
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            return back()->with('error', 'Invalid URL');
          }
        $user->update($attributtes);
        return redirect('home')->with('success', 'profile updated Successful');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user_id=auth()->user()->id;
        DB::delete("DELETE from users where id=?",[$user_id]);
        return redirect('login')->with('success', 'Thank you for Trying This');
    }

    public function byee(User $user)
    {
        $user=auth()->user();
       return view('profile.useridea', compact('user'));
    }

    public function sugg(User $user)
    {
        $user=auth()->user()->username;
        $email=auth()->user()->email;
        $suggestions=request('suggestion');

        suggestions::Create([
            'username'=>$user,
            'email'=>$email,
            'suggestion'=>$suggestions
        ]);
       return back()->with('success','Thank you User  '  .$user);
    }

}
