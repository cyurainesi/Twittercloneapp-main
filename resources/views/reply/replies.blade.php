@forelse ($commentsreplies as $commentsreply)
@if($commentsreply->user_id === $user->id)
@if ($commentsreply->comment_id===$tweetcomment->id)

<div class="row">
    <div class="col-lg-12  ">
        <div class="d-flex">
            <div class="flex-grow-1 text-truncate">
                <div class="d-flex flex-row text-break ">
                    <div class="">
                        <a href="{{ route('profile',$tweet->user ) }} ">
                            <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-2" width="50px" >
                        </a>
                    </div>
                    <div class="p-1 text-truncate">

                        <p class="text-truncate font-weight-bold">{{ $user->name }}</p>

                    </div>
                    <div class="p-1 text-truncate">
                        <a href="{{ route('profile',$tweet->user ) }}" class="text-muted">
                            <span class="text-muted">{{ '@' }}{{ $user->username }}</span>
                        </a>
                    </div>

                    <div class="p-1 text-truncate">
                        {{ date('D') }}
                    </div>

                    <div class="p-1 text-truncate">
                        @if(auth()->user()->id == $commentsreply->user_id)
                        @else
                            @include('button.app')
                        @endif
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
                                    @if (auth()->user()->id == $commentsreply->user_id )
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


        <div class="d-flex flex-column tweetbody text-break border-left ml-3">
            <div class="d-flex flex-column text-break ">
                <div class="pl-3">
                    @if ($commentsreply->reply != null)
                        <a href="{{route('find',$tweet->id)}}" class="text-decoration-none text-dark">
                            <p>
                                {!!  Str::limit($commentsreply->reply, 500) !!}
                            </p>
                        </a>

                        <a href="{{ route('profile',$tweet->user ) }} " class="text-muted">
                        Replying to: <span class="text-primary">{{ '@' }}{{ $tweet->user->username }}</span>
                        </a>
                    @endif
                    @if($commentsreply->image != null)
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{$commentsreply->image}}" class="img-thumbnail">
                                </a>
                                <a href="{{ route('profile',$tweet->user ) }} " class="text-muted">
                                    Replying to: <span class="text-primary">{{ '@' }}{{ $tweet->user->username }}</span>
                                </a>
                            </div>

                        </div>
                    @endif
                    @if($commentsreply->gif != null)
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="text-decoration-none text-dark">
                                    <img src="{{$commentsreply->gif}}" class="img-thumbnail">
                                </a>

                                <a href="{{ route('profile',$tweet->user ) }} " class="text-muted">
                                    Replying to: <span class="text-primary">{{ '@' }}{{ $tweet->user->username }}</span>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
@empty

@endforelse

