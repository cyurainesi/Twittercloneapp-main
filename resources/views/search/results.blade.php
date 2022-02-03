@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-3 sidebar">
            @if (auth()->check())
                    @include('sidebar.app')

            @endif
        </div>
        <div class="col-lg-3 sidebottom fixed-bottom bg-white border-top text-center">
            @if (auth()->check())
                    @include('sidebar.bottom')

            @endif
        </div>
        <div class="col-lg-3 sidebottom fixed-top bg-white border-top text-center">
            @if (auth()->check())
                @include('sidebar.header')
            @endif
        </div>
        <div class="col-lg-5 border-left border-right">
            <div class="row">
                <div class="col-lg-12 mt-2 sticky-top bg-white border-bottom ">
                    <div class="d-flex flex-row">
                        <div class="">
                            <p>
                                <a href="{{ route('home') }}">
                                    <svg class="arrowleft" viewBox="0 0 20 20" width="20px">
                                        <path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
                                        L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
                                        c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
                                        c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
                                        S18.707,9.212,18.271,9.212z"></path>
                                    </svg>
                                </a>
                            </p>
                        </div>
                        <div class="leftsearch flex-grow-1">
                            <form method="POST" action="/tweets" enctype="multipart/form-data">
                                @csrf
                                <input class="form-control border-0 text-left" value="{{$search}}" type="text" placeholder="search" name="search" style="border-radius: 25px;">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex text-center">
                        <div class="p-2 flex-fill notfybutton">
                            <a href=""  class="text-decoration-none ">Top</a>
                        </div>
                        <div class="p-2 flex-fill notfybutton">
                            <a href=""  class="text-decoration-none ">Latest</a>
                        </div>
                        <div class="p-2 flex-fill notfybutton">
                            <a href=""  class="text-decoration-none ">Peaple</a>
                        </div>
                        <div class="p-2 flex-fill notfybutton">
                            <a href=""  class="text-decoration-none ">Photo</a>
                        </div>
                        <div class="p-2 flex-fill notfybutton">
                            <a href=""  class="text-decoration-none ">Videos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-1">
                    <h3><span class="text-muted"> Results for:</span> "  {{ $search }} "</h3>
                </div>

                <div class="col-lg-12">
                    @forelse ($tweets as $tweet)
                        <p>{{ $tweet->body }}</p>
                    @empty
                        <p class="mt-2">No results Found</p>
                    @endforelse

                </div>

                <div class="col-lg-12 p-2">
                    <h5>Peaple</h5>
                    @forelse($userresult as $user)
                    <div class="d-flex flex-row text-truncate p-3 friendlistedtweetsecond {{ $loop->last ? '':'border-bottom' }}">
                        <div class="flex-grow-1 text-truncate">
                            <div class="d-flex text-truncate">
                                <div class="">
                                    <a href="{{ route('profile',$user->username) }}" class=" text-sm">
                                        <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-3" width="40px" >
                                    </a>
                                </div>
                                <div class="text-truncate">
                                    <a href="{{ route('profile',$user->username) }}" class="text-decoration-none text-sm">
                                        {{ $user->name }}
                                        <br>
                                        <span class="text-decoration-none text-muted">{{ '@' }}{{ $user->username }}</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <a href="{{ route('profile',$user->username) }}" class="btn btn-outline-primary-follow btn-sm text-xs text-truncate"style="border-radius:37px ">
                                View Profile
                            </a>
                        </div>
                    </div>
                    @empty
                    <p class="mt-2">No Users Found</p>
                @endforelse
                </div>
            </div>
        </div>
        <div class="col-lg-3 leftside pt-3" >
            <div class="row  sticky-top">
                <div class="col-lg-12  pb-4 pt-4">
                    @if (auth()->check())
                            @include('search.app')
                    @endif
                </div>
                <div class="col-lg-12  rounded">
                    @if (auth()->check())
                            @include('suggestion.app')

                    @endif
                </div>

                <div class="col-lg-12 p-3 rounded mt-4">
                    @include('tweets.trends')
                </div>

                <div class="col-lg-12 p-3 rounded mt-4">
                    @include('terms.app')
                </div>
            </div>
        </div>

    </div>
</div>
