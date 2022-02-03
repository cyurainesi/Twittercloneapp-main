@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-3">
        @include('sidebar.app')
    </div>
    <div class="col-lg-5 border-bottom border-left border-right rounded">

        <div class="row">
            <div class="col-lg-12 sticky-top bg-white border-bottom ">
                <div class="d-flex pt-2 flex-row">
                    <div class="p-2">
                        <p>
                            <svg class="arrowleft" viewBox="0 0 20 20" width="20px">
                                <path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
                                L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
                                c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
                                c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
                                S18.707,9.212,18.271,9.212z"></path>
                            </svg>
                        </p>
                    </div>

                    <div class="p-1">
                        <p class="font-weight-bold">{{ 'Followers'}}<br>
                            <span class="font-weight-normal">{{ '@' }}{{$user->username  }} Tweets </span>
                        </p>


                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                @forelse ($follower as $user)

                    <div class="d-flex justify-content-start pb-3 pt-2 {{ $loop->last ? '':'border-bottom' }}">
                        <div class="">
                            <a href="{{ route('profile',$user) }}" class="flex items-center  text-sm">
                                <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-3" width="40px" >
                            </a>
                        </div>
                        <div class="text-truncate">
                            <a href="{{ route('profile',$user) }}" class="flex items-center  text-sm">
                                {{ $user->name }}
                            </a>
                        </div>
                        <div class="pl-2">
                            @include('button.app')
                        </div>
                    </div>

                @empty
                    <p class="mt-5 text-muted text-center">NO Followers Found</p>
                @endforelse
            </div>
            <div class="col-lg-12">
                <a href="{{ route('explore') }}">
                    <div class="" >
                        Find More Connections
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="col-lg-3 leftside pt-3" >
        <div class="row  sticky-top">
            <div class="col-lg-12 pt-4">
                @if (auth()->check())
                    @include('search.app')
                @endif
            </div>
            <div class="col-lg-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5>Connect</h5>
                        </li>
                      <li class="list-group-item">
                        <a href="https://twitter.com/job10236901">
                            <i class="fa fa-twitter text-primary" aria-hidden="true" ></i> TWitter
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="https://www.facebook.com/i.job.5">
                            <i class="fa fa-facebook text-primary" aria-hidden="true"></i>
                            Facebook
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="https://www.instagram.com/jobeuse/">
                            <i class="fa fa-instagram text-primary" aria-hidden="true"></i>
                            INstagram
                        </a>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="col-lg-12 p-3 rounded mt-4">
                @include('terms.app')
            </div>
        </div>
    </div>
</div>


</div>
