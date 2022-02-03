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

        <div class="col-lg-5  border border-bottom-0">
            <div class="row">
                <div class="col-lg-12 pt-2 pl-3 border-bottom">
                    <div class="d-flex flex-row">
                        <div class="flex-grow-1 font-weight-bold">
                            <h4>Home</h4>
                        </div>
                        <div class="">
                            <div class="btn-group dropleft  " width="" b>
                                <a class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg viewBox="0 0 24 24" class="" width="30px">
                                        <g><path d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z">
                                        </path></g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu p-3 shadow bg-white  border-0" style="width:300px;" wfd-invisible="true">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <svg viewBox="0 0 36 36" class="iconhometop" width="30px">
                                                <g>
                                                    <path d="M35.508 15.41l-9.295-3.387L22.438 1.47c-.108-.302-.357-.48-.722-.495-.322.007-.604.22-.698.53l-3.293 10.71-9.132 3.805c-.285.118-.467.4-.46.708.007.308.203.58.492.686L17.92 20.8l3.775 10.552c.107.298.39.496.704.496h.016c.322-.007.604-.22.698-.53l3.293-10.712 9.132-3.803c.284-.118.466-.4.46-.708-.007-.308-.203-.58-.492-.686z" fill="#61BCF6">
                                                    </path>
                                                    <path d="M9.57 4.715l-2.906.065-.06-2.715C6.585 1.34 5.983.763 5.256.78 4.53.796 3.955 1.4 3.97 2.125l.063 2.715-2.747.062C.56 4.92-.016 5.522 0 6.248c.017.726.62 1.302 1.346 1.285l2.747-.062.062 2.716c.017.726.62 1.302 1.345 1.286.726-.016 1.302-.62 1.286-1.345l-.062-2.715 2.905-.066c.725-.017 1.3-.62 1.285-1.346-.017-.726-.62-1.302-1.346-1.285z" fill="#F16888"></path><path d="M14.205 29.69l-1.65.036-.034-1.518c-.016-.726-.618-1.302-1.344-1.286s-1.302.62-1.286 1.345l.034 1.518-1.54.035c-.726.016-1.302.62-1.286 1.345.017.726.62 1.302 1.345 1.286l1.54-.034.034 1.518c.017.726.62 1.302 1.345 1.286.726-.016 1.302-.62 1.286-1.345l-.034-1.518 1.65-.037c.726-.016 1.302-.62 1.286-1.345-.016-.727-.62-1.303-1.345-1.286z" fill="#FD9E1A">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="col-lg-12 dropdownhomechoices">
                                                <p class="font-weight-bold  text-center">Home shows you top Tweets first</p>
                                                    <div class="btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn mb-2">
                                                                <input type="checkbox">
                                                                <path width="20px" d="M21 16.25H4.81l3.22-3.22c.294-.293.294-.768 0-1.06s-.767-.294-1.06 0l-4.5 4.5c-.293.292-.293.767 0 1.06l4.5 4.5c.146.146.338.22.53.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.22-3.22H21c.414 0 .75-.337.75-.75s-.336-.75-.75-.75zM3 7.75h16.19l-3.22 3.22c-.294.293-.294.768 0 1.06.145.147.337.22.53.22s.383-.072.53-.22l4.5-4.5c.292-.292.292-.767 0-1.06l-4.5-4.5c-.294-.293-.77-.293-1.062 0s-.293.768 0 1.06l3.22 3.22H3c-.414 0-.75.336-.75.75s.336.75.75.75z">

                                                                </path>
                                                                    <p class=" text-center">See latest Tweets instead</p>
                                                                <span class="text-muted">
                                                                    You’ll be switched back Home after you’ve been away for a while.
                                                                </span>
                                                            </label>
                                                            <br>
                                                            <label class="btn mb-2">
                                                                <input type="checkbox">
                                                                <svg viewBox="0 0 24 24" class="" width="20px">
                                                                    <g>
                                                                        <path d="M12 8.21c-2.09 0-3.79 1.7-3.79 3.79s1.7 3.79 3.79 3.79 3.79-1.7 3.79-3.79-1.7-3.79-3.79-3.79zm0 6.08c-1.262 0-2.29-1.026-2.29-2.29S10.74 9.71 12 9.71s2.29 1.026 2.29 2.29-1.028 2.29-2.29 2.29z">
                                                                        </path>
                                                                        <path d="M12.36 22.375h-.722c-1.183 0-2.154-.888-2.262-2.064l-.014-.147c-.025-.287-.207-.533-.472-.644-.286-.12-.582-.065-.798.115l-.116.097c-.868.725-2.253.663-3.06-.14l-.51-.51c-.836-.84-.896-2.154-.14-3.06l.098-.118c.186-.222.23-.523.122-.787-.11-.272-.358-.454-.646-.48l-.15-.014c-1.18-.107-2.067-1.08-2.067-2.262v-.722c0-1.183.888-2.154 2.064-2.262l.156-.014c.285-.025.53-.207.642-.473.11-.27.065-.573-.12-.795l-.094-.116c-.757-.908-.698-2.223.137-3.06l.512-.512c.804-.804 2.188-.865 3.06-.14l.116.098c.218.184.528.23.79.122.27-.112.452-.358.477-.643l.014-.153c.107-1.18 1.08-2.066 2.262-2.066h.722c1.183 0 2.154.888 2.262 2.064l.014.156c.025.285.206.53.472.64.277.117.58.062.794-.117l.12-.102c.867-.723 2.254-.662 3.06.14l.51.512c.836.838.896 2.153.14 3.06l-.1.118c-.188.22-.234.522-.123.788.112.27.36.45.646.478l.152.014c1.18.107 2.067 1.08 2.067 2.262v.723c0 1.183-.888 2.154-2.064 2.262l-.155.014c-.284.024-.53.205-.64.47-.113.272-.067.574.117.795l.1.12c.756.905.696 2.22-.14 3.06l-.51.51c-.807.804-2.19.864-3.06.14l-.115-.096c-.217-.183-.53-.23-.79-.122-.273.114-.455.36-.48.646l-.014.15c-.107 1.173-1.08 2.06-2.262 2.06zm-3.773-4.42c.3 0 .593.06.87.175.79.328 1.324 1.054 1.4 1.896l.014.147c.037.4.367.7.77.7h.722c.4 0 .73-.3.768-.7l.014-.148c.076-.842.61-1.567 1.392-1.892.793-.33 1.696-.182 2.333.35l.113.094c.178.148.366.18.493.18.206 0 .4-.08.546-.227l.51-.51c.284-.284.305-.73.048-1.038l-.1-.12c-.542-.65-.677-1.54-.352-2.323.326-.79 1.052-1.32 1.894-1.397l.155-.014c.397-.037.7-.367.7-.77v-.722c0-.4-.303-.73-.702-.768l-.152-.014c-.846-.078-1.57-.61-1.895-1.393-.326-.788-.19-1.678.353-2.327l.1-.118c.257-.31.236-.756-.048-1.04l-.51-.51c-.146-.147-.34-.227-.546-.227-.127 0-.315.032-.492.18l-.12.1c-.634.528-1.55.67-2.322.354-.788-.327-1.32-1.052-1.397-1.896l-.014-.155c-.035-.397-.365-.7-.767-.7h-.723c-.4 0-.73.303-.768.702l-.014.152c-.076.843-.608 1.568-1.39 1.893-.787.326-1.693.183-2.33-.35l-.118-.096c-.18-.15-.368-.18-.495-.18-.206 0-.4.08-.546.226l-.512.51c-.282.284-.303.73-.046 1.038l.1.118c.54.653.677 1.544.352 2.325-.327.788-1.052 1.32-1.895 1.397l-.156.014c-.397.037-.7.367-.7.77v.722c0 .4.303.73.702.768l.15.014c.848.078 1.573.612 1.897 1.396.325.786.19 1.675-.353 2.325l-.096.115c-.26.31-.238.756.046 1.04l.51.51c.146.147.34.227.546.227.127 0 .315-.03.492-.18l.116-.096c.406-.336.923-.524 1.453-.524z">
                                                                            </path>
                                                                    </g>
                                                                </svg>
                                                                <span class="text-muted"> content preferences</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            @include('publish.app')
                        </div>
                        <div class="col-lg-12 dividers p-1">
                        </div>
                        <div class="col-lg-12 border-top">
                            <div class="row">
                                <div class="col-lg-12">
                                @include('tweets.app')
                                </div>
                                <div class="col-lg-12 p-1 dividers">

                                </div>
                                <div class="col-lg-12 p-2">
                                    <h5>Who to follow</h5>
                                    @forelse($suggestedusers as $user)
                                    @if(auth()->user()->isnot($user))
                                        @if(auth()->user()->following($user))
                                            @else
                                                <div class="d-flex flex-row text-truncate p-3 friendlistedtweetsecond {{ $loop->last ? '':'border-bottom' }}">
                                                    <div class="flex-grow-1 text-truncate">
                                                        <div class="d-flex text-truncate">
                                                            <div class="">
                                                                <a href="{{ route('profile',$user) }}" class=" text-sm">
                                                                    <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-3" width="40px" >
                                                                </a>
                                                            </div>
                                                            <div class="text-truncate">
                                                                <a href="{{ route('profile',$user) }}" class="text-decoration-none text-sm">
                                                                    {{ $user->name }}
                                                                    <br>
                                                                    <span class="text-decoration-none text-muted">{{ '@' }}{{ $user->username }}</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="">
                                                        @include('button.app')
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @empty
                                    <p>No Users Found</p>
                                @endforelse
                                </div>
                                <div class="col-lg-12 hometweettrend">
                                    @include('explore.trendtweets')
                                </div>
                            </div>
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
                        <div class="col-lg-12 mt-2 mb-2 ">
                            <div class="card" friendlistedlefttofollow>
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
@endsection
