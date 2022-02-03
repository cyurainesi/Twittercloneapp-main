@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3">
        @include('sidebar.app')
    </div>
    <div class="col-lg-5 border-left border-right">
        <div class="row">
            <div class="col-lg-12 border-bottom">
                <div class="d-flex pt-2 flex-row">
                    <div class="p-2">
                        <p>
                            <a href="{{ route('home')}}" class="text-decoration-none text-dark">

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
                    <div class="p-1">
                        Tweet
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex">
                    <div class="flex-grow-1 text-truncate">
                        <div class="d-flex flex-row text-break ">
                            <div class="">
                                <a href="{{ route('profile',$tweet->user->username ) }} ">
                                    <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-2" width="50px" >
                                </a>
                            </div>
                            <div class="p-1 text-truncate">

                                <a href="{{ route('profile',$tweet->user->username ) }}">
                                    {{ $tweet->user->name }}<br>
                                        <span  class="text-muted">
                                            {{ '@' }}{{ $tweet->user->username }}
                                        </span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <div class="text-m-right">
                            <div class="btn-group dropleft  ">
                                <a class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-icon" viewBox="0 0 20 20" width="20px">
                                        <path fill="none" d="M3.936,7.979c-1.116,0-2.021,0.905-2.021,2.021s0.905,2.021,2.021,2.021S5.957,11.116,5.957,10
                                            S5.052,7.979,3.936,7.979z M3.936,11.011c-0.558,0-1.011-0.452-1.011-1.011s0.453-1.011,1.011-1.011S4.946,9.441,4.946,10
                                            S4.494,11.011,3.936,11.011z M16.064,7.979c-1.116,0-2.021,0.905-2.021,2.021s0.905,2.021,2.021,2.021s2.021-0.905,2.021-2.021
                                            S17.181,7.979,16.064,7.979z M16.064,11.011c-0.559,0-1.011-0.452-1.011-1.011s0.452-1.011,1.011-1.011S17.075,9.441,17.075,10
                                            S16.623,11.011,16.064,11.011z M10,7.979c-1.116,0-2.021,0.905-2.021,2.021S8.884,12.021,10,12.021s2.021-0.905,2.021-2.021
                                            S11.116,7.979,10,7.979z M10,11.011c-0.558,0-1.011-0.452-1.011-1.011S9.442,8.989,10,8.989S11.011,9.441,11.011,10
                                            S10.558,11.011,10,11.011z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdownhometweetchoices shadow-sm pl-2 bg-white border-0" wfd-invisible="true">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            @if (auth()->user()->id == $tweet->user_id )

                                            <form method="POST" action="/tweets/{{$tweet->id}}/remove">
                                                @csrf
                                                <input type="text" name="tweet_id" value="{{$tweet->id}}" hidden>
                                                <button class="btn text-danger" type="submit">
                                                    <svg viewBox="0 0 24 24" class="" width="20px">
                                                        <g>
                                                            <path d="M20.746 5.236h-3.75V4.25c0-1.24-1.01-2.25-2.25-2.25h-5.5c-1.24 0-2.25 1.01-2.25 2.25v.986h-3.75c-.414 0-.75.336-.75.75s.336.75.75.75h.368l1.583 13.262c.216 1.193 1.31 2.027 2.658 2.027h8.282c1.35 0 2.442-.834 2.664-2.072l1.577-13.217h.368c.414 0 .75-.336.75-.75s-.335-.75-.75-.75zM8.496 4.25c0-.413.337-.75.75-.75h5.5c.413 0 .75.337.75.75v.986h-7V4.25zm8.822 15.48c-.1.55-.664.795-1.18.795H7.854c-.517 0-1.083-.246-1.175-.75L5.126 6.735h13.74L17.32 19.732z"></path><path d="M10 17.75c.414 0 .75-.336.75-.75v-7c0-.414-.336-.75-.75-.75s-.75.336-.75.75v7c0 .414.336.75.75.75zm4 0c.414 0 .75-.336.75-.75v-7c0-.414-.336-.75-.75-.75s-.75.336-.75.75v7c0 .414.336.75.75.75z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                        Delete
                                                </button>
                                            </form>

                                                @else
                                                <svg viewBox="0 0 24 24" width="20px">
                                                    <g>
                                                    <path d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z"></path><path d="M12 13.415c1.892 0 3.633.95 4.656 2.544.224.348.123.81-.226 1.035-.348.226-.812.124-1.036-.226-.747-1.162-2.016-1.855-3.395-1.855s-2.648.693-3.396 1.854c-.224.35-.688.45-1.036.225-.35-.224-.45-.688-.226-1.036 1.025-1.594 2.766-2.545 4.658-2.545zm4.216-3.957c0 .816-.662 1.478-1.478 1.478s-1.478-.66-1.478-1.478c0-.817.662-1.478 1.478-1.478s1.478.66 1.478 1.478zm-5.476 0c0 .816-.662 1.478-1.478 1.478s-1.478-.66-1.478-1.478c0-.817.662-1.478 1.478-1.478.817 0 1.478.66 1.478 1.478z">
                                                    </path>
                                                    </g>
                                                </svg>
                                                <span>Not Interested</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column tweetbody text-break ">
                    <div class="d-flex flex-column text-break ">
                        <div class="pl-5">
                            @if ($tweet->body != null)
                                <a href="{{ route('find',$tweet->id)}}" class="text-decoration-none text-dark">
                                    <p>
                                        {!!  Str::limit($tweet->body, 500) !!}
                                    </p>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="d-flex p-2 flex-row text-break text-truncate">
                    {{ $tweet->created_at}}
                </div>

                <div class="d-flex p-2 flex-row text-break text-truncate border-top border-bottom  tweetsicon">
                    <div class="p-2">
                        {{ $tweet->comments->count() ? :'' }} <span class="text-muted"> Comments</span>
                    </div>
                    <div class="p-2">
                        {{ $tweet->likes->count() ? :''}} <span class="text-muted">Likes</span>
                    </div>
                </div>

                <div class="d-flex p-2 flex-row text-break text-truncate  border-bottom  tweetsicon">
                    <div class="">

                        <svg viewBox="0 0 24 24" width="20px" data-toggle="collapse" data-target="#collapseComment{{$tweet->id}}" aria-expanded="false" aria-controls="collapseComment">
                            <path d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z"></path>
                        </svg>
                    </div>
                    <div class="pl-5">
                        <svg viewBox="0 0 24 24"  width="20px">
                            <path d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z"></path>
                        </svg>

                    </div>
                    <div class="pl-5">
                        <form method="POST" action="/tweets/{{ $tweet->id }}/like">
                            @csrf

                            <button type="submit" class="{{ $tweet->likes($user)?'':'' }}btn like btn-sm " width="20px">
                                <svg viewBox="0 0 24 24"width="20px">
                                    <path d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="pl-5">
                        <form method="POST" action="/tweets/{{ $tweet->id }}/bookmark">
                            @csrf
                            <input class="form-control" type="text" name="tweet_id" value="{{$tweet->id}}" hidden>
                            <button type="submit" class="btn bookmark btn-sm">
                                <svg viewBox="0 0 24 24" width="20px">
                                    <path d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z"></path><path d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 p-3 collapse" id="collapseComment{{$tweet->id}}">
                <div class="card  shadow rounded-lg border-0">
                    <div class="card card-body border-0">

                        @include('comments.app')
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-2 ">
                @foreach($users as $user)
                    @include('comments.comment')
                @endforeach
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
@endsection

