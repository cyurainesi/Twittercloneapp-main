@extends('layouts.app')
@section('content')
<div class="row">
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
                        <p class="font-weight-bold">{{ $user->username }}<br>
                            <span class="font-weight-normal">{{ $tweetscount }} Tweets </span>
                        </p>


                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                 <img src="{{ asset('images/Twitter-clone-web-App-banner.png') }}" alt="cover photo" class="rounded img-thumbnail border-0"
                 style="border-radius:37px;">
                <div class="d-flex flex-row">
                    <div class="p-2 flex-grow-1">
                        <a href="{{ route('profile',$user) }}" class="flex items-center  text-sm">
                            <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'
                            alt="imagefrined" class="rounded-full mr-3" width="100px" style="position: absolute;
                            top: 93px;bottom:0px;left:30px;" >
                        </a>

                    </div>

                    <div class="p-2">
                        @include('button.app')
                    </div>

                </div>
                <div class="d-flex flex-row">
                    <div class="pl-3">
                        <h4 class="font-bold  mb-3">{{ $user->name }}
                            <p class="text-sm text-muted" style="font-size:14px;">{{ '@' }}{{ $user->username}}</p></h4>
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <p class="text-muted">
                                        <svg class="svg-icon" viewBox="0 0 20 20" width="20px">
                                        <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                        </svg>
                                        RD
                                    </p>
                                </div>
                                <div class="p-2">
                                    <p class="text-muted">
                                        <svg class="svg-icon" viewBox="0 0 20 20"  width="20px">
                                            <path fill="none" d="M16.254,3.399h-0.695V3.052c0-0.576-0.467-1.042-1.041-1.042c-0.576,0-1.043,0.467-1.043,1.042v0.347H6.526V3.052c0-0.576-0.467-1.042-1.042-1.042S4.441,2.476,4.441,3.052v0.347H3.747c-0.768,0-1.39,0.622-1.39,1.39v11.813c0,0.768,0.622,1.39,1.39,1.39h12.507c0.768,0,1.391-0.622,1.391-1.39V4.789C17.645,4.021,17.021,3.399,16.254,3.399z M14.17,3.052c0-0.192,0.154-0.348,0.348-0.348c0.191,0,0.348,0.156,0.348,0.348v0.347H14.17V3.052z M5.136,3.052c0-0.192,0.156-0.348,0.348-0.348S5.831,2.86,5.831,3.052v0.347H5.136V3.052z M16.949,16.602c0,0.384-0.311,0.694-0.695,0.694H3.747c-0.384,0-0.695-0.311-0.695-0.694V7.568h13.897V16.602z M16.949,6.874H3.052V4.789c0-0.383,0.311-0.695,0.695-0.695h12.507c0.385,0,0.695,0.312,0.695,0.695V6.874z M5.484,11.737c0.576,0,1.042-0.467,1.042-1.042c0-0.576-0.467-1.043-1.042-1.043s-1.042,0.467-1.042,1.043C4.441,11.271,4.908,11.737,5.484,11.737z M5.484,10.348c0.192,0,0.347,0.155,0.347,0.348c0,0.191-0.155,0.348-0.347,0.348s-0.348-0.156-0.348-0.348C5.136,10.503,5.292,10.348,5.484,10.348z M14.518,11.737c0.574,0,1.041-0.467,1.041-1.042c0-0.576-0.467-1.043-1.041-1.043c-0.576,0-1.043,0.467-1.043,1.043C13.475,11.271,13.941,11.737,14.518,11.737z M14.518,10.348c0.191,0,0.348,0.155,0.348,0.348c0,0.191-0.156,0.348-0.348,0.348c-0.193,0-0.348-0.156-0.348-0.348C14.17,10.503,14.324,10.348,14.518,10.348z M14.518,15.212c0.574,0,1.041-0.467,1.041-1.043c0-0.575-0.467-1.042-1.041-1.042c-0.576,0-1.043,0.467-1.043,1.042C13.475,14.745,13.941,15.212,14.518,15.212z M14.518,13.822c0.191,0,0.348,0.155,0.348,0.347c0,0.192-0.156,0.348-0.348,0.348c-0.193,0-0.348-0.155-0.348-0.348C14.17,13.978,14.324,13.822,14.518,13.822z M10,15.212c0.575,0,1.042-0.467,1.042-1.043c0-0.575-0.467-1.042-1.042-1.042c-0.576,0-1.042,0.467-1.042,1.042C8.958,14.745,9.425,15.212,10,15.212z M10,13.822c0.192,0,0.348,0.155,0.348,0.347c0,0.192-0.156,0.348-0.348,0.348s-0.348-0.155-0.348-0.348C9.653,13.978,9.809,13.822,10,13.822z M5.484,15.212c0.576,0,1.042-0.467,1.042-1.043c0-0.575-0.467-1.042-1.042-1.042s-1.042,0.467-1.042,1.042C4.441,14.745,4.908,15.212,5.484,15.212z M5.484,13.822c0.192,0,0.347,0.155,0.347,0.347c0,0.192-0.155,0.348-0.347,0.348s-0.348-0.155-0.348-0.348C5.136,13.978,5.292,13.822,5.484,13.822z M10,11.737c0.575,0,1.042-0.467,1.042-1.042c0-0.576-0.467-1.043-1.042-1.043c-0.576,0-1.042,0.467-1.042,1.043C8.958,11.271,9.425,11.737,10,11.737z M10,10.348c0.192,0,0.348,0.155,0.348,0.348c0,0.191-0.156,0.348-0.348,0.348s-0.348-0.156-0.348-0.348C9.653,10.503,9.809,10.348,10,10.348z"></path>
                                        </svg>
                                        JOined {{ $user->created_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="d-flex flex-row">
                                <div class="pl-3">
                                    @if($user->username == auth()->user()->username)
                                        <a href="{{ route('following',$user->username ) }}" class="text-muted text-decoration-none">
                                            <p class="text-muted">
                                                {{$following}} Following
                                            </p>
                                        </a>
                                    @else
                                        <p class="text-muted" data-container="body" data-toggle="popover" data-placement="top"
                                        data-content="You can't See This content {{ '' }}{{ $following  }} Following">
                                        {{$following }} Following
                                        </p>
                                    @endif
                                </div>
                                <div class="pl-3">
                                    @if($user->username == auth()->user()->username)
                                        <a href="{{ route('followers',$user->username ) }}" class="text-muted text-decoration-none">
                                            <p class="text-muted">
                                                {{$follower }} Followers
                                            </p>
                                        </a>

                                    @else
                                        <p class="text-muted" data-container="body" data-toggle="popover" data-placement="top"
                                        data-content="You can't See This content {{ '' }}{{ $follower  }} Followers">
                                                {{$follower }} Followers
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex profilelinks pb-2 border-bottom">
                    <div class="p-2 flex-fill">
                        <a href="" aria-disabled="true">Tweets</a>
                    </div>
                    <div class="p-2 flex-fill">
                        <a href="#" aria-disabled="true">Tweets&Replies</a>
                    </div>
                    <div class="p-2 flex-fill">
                        <a href="#" aria-disabled="true">Media</a>
                    </div>
                    <div class="p-2 flex-fill">
                        <a href="#" aria-disabled="true">Likes</a>
                    </div>
                </div>
                <div class="">
                    <div class="p-2 rounded-lg">
                        @include('tweets.app',[
                            'tweets'=>$user->tweets
                        ])
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="col-lg-3 leftside  p-3 rounded-lg">
    <div class="row sticky-top">

        <div class="col-lg-12 pb-4 pt-4">
            @if (auth()->check())
                    @include('search.app')
            @endif
        </div>
        <div class="col-lg-12">
            <div class="card">
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
        <div class="mt-4 ml-3">
            @if (auth()->check())
                 @include('suggestion.app')
            @endif
        </div>

        <div class="col-lg-12 mt-4">
            @include('terms.app')
        </div>

    </div>

</div>
</div>
@endsection






















