@extends('layouts.app')
@section('content')
<div class="container-fluid">
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
        <div class="col-lg-5 border border-bottom-0">
            <div class="row">
                <div class="col-lg-12 sticky-top bg-white  border-bottom ">
                    <div class="d-flex pt-2 flex-row">
                        <div class="flex-grow-1 p-1">
                            <p class="font-weight-bold">{{ 'Bookmarks'}}<br>
                                <span class="font-weight-normal">{{ '@' }}{{  auth()->user()->username }} </span>
                            </p>
                        </div>
                        <div class="">
                            <div class="btn-group bookmarkmore dropleft">
                                <a type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg viewBox="0 0 24 24" class="" width="20px">
                                        <g>
                                            <path d="M19.39 14.882c-1.58 0-2.862-1.283-2.862-2.86s1.283-2.862 2.86-2.862 2.862 1.283 2.862 2.86-1.284 2.862-2.86 2.862zm0-4.223c-.75 0-1.362.61-1.362 1.36s.61 1.36 1.36 1.36 1.362-.61 1.362-1.36-.61-1.36-1.36-1.36zM12 14.882c-1.578 0-2.86-1.283-2.86-2.86S10.42 9.158 12 9.158s2.86 1.282 2.86 2.86S13.578 14.88 12 14.88zm0-4.223c-.75 0-1.36.61-1.36 1.36s.61 1.362 1.36 1.362 1.36-.61 1.36-1.36-.61-1.363-1.36-1.363zm-7.39 4.223c-1.577 0-2.86-1.283-2.86-2.86S3.034 9.16 4.61 9.16s2.862 1.283 2.862 2.86-1.283 2.862-2.86 2.862zm0-4.223c-.75 0-1.36.61-1.36 1.36s.61 1.36 1.36 1.36 1.362-.61 1.362-1.36-.61-1.36-1.36-1.36z"></path></g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu p-3 shadow-sm bg-white text-muted border-0">
                                    <form method="POST" action="/tweets/bookmark/remove">
                                        @csrf
                                        <button class="btn btn-sm btn-default text-danger" type="submit">
                                            clear all
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                        @forelse ($tweets as $tweet)
                        <div class="d-flex flex-row text-break ">
                            <div class=" bd-highlight">
                                <a href="{{ route('profile',{{ $tweet->user->username }}) }} ">
                                    <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-2" width="50px" >
                                </a>
                            </div>
                            <div class="p-1 text-truncate">

                                <a class="font-weight-bold text-decoration-none text-dark mb-3 text-truncate">{{ $tweet->user->name }}</a>

                            </div>
                            <div class="p-1 text-truncate">
                                <a href="{{ route('profile',{{ $tweet->user->username }} ) }}" class="text-muted">
                                    {{ '@' }}{{ $tweet->user->username }}
                                </a>
                            </div>

                            <div class="p-1 text-truncate">
                            {{ $tweet->created_at->diffForHumans() }}

                            </div>

                        </div>
                        <a href="" class="text-decoration-none text-dark">
                        <div class="d-flex flex-column text-break  mb-2 ">

                            <div class="ml-5 pl-2">
                                <a href="{{ route('find',$tweet->id)}}" class="text-decoration-none text-dark">

                                    <p>
                                        {!!  Str::limit($tweet->body, 500) !!}
                                    </p>
                                </a>
                            </div>
                        </div>
                        </a>

                        <div class="d-flex flex-row text-break text-truncate pb-3 {{ $loop->last ? '':'border-bottom' }} tweetsicon">
                            <div class="">
                                    <svg viewBox="0 0 24 24" width="20px">
                                        <path d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z"></path>
                                    </svg>
                            </div>
                            <div class="pl-5">
                                <svg viewBox="0 0 24 24"  width="20px">
                                    <path d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z"></path>
                                </svg>

                            </div>
                            <div class="pl-5">
                                <div class="d-flex flex-row">
                                    <div class="">
                                        <form method="POST" action="/tweets/{{ $tweet->id }}/like">
                                            @csrf
                                            <button type="submit">
                                                <svg viewBox="0 0 24 24"width="20px">
                                                    <path d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    <div class=" pt-3">

                                        {{ $tweet->likes ? :0 }}
                                    </div>
                                </div>
                            </div>
                            <div class="pl-5">
                                    <form method="POST" action="/tweets/{{ $tweet->id }}/bookmark/remove">
                                    @csrf
                                    <input class="form-control" type="text" name="tweet_id" value="{{$tweet->id}}" hidden>
                                    <button type="submit">
                                        <svg viewBox="0 0 24 24" width="20px" >
                                            <path d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z"></path><path d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </div>
                        @empty
                            <p>No Tweets Added Here</p>
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
                         @include('friends.app')
                    @endif
                </div>
                <div class="col-lg-12  rounded mt-3">
                    @if (auth()->check())
                    @include('tweets.trends')
                    @endif
                </div>
                <div class="col-lg-12 p-3 rounded mt-4">
                    @include('terms.app')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
