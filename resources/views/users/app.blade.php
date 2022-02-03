<div class="row  rounded  p-2 ">
    <div class="col-lg-12">
        <div class="d-flex ">
            <div class="p-2 flex-grow-1 ">
                <h5 class="font-bold text-lg mb-4">Who to Follow</h5>
            </div>
            <div class="pl-3">
                <svg viewBox="0 0 24 24" class="svg-iconuser" width="20px">
                    <g><path d="M20.207 8.147c-.39-.39-1.023-.39-1.414 0L12 14.94 5.207 8.147c-.39-.39-1.023-.39-1.414 0-.39.39-.39 1.023 0 1.414l7.5 7.5c.195.196.45.294.707.294s.512-.098.707-.293l7.5-7.5c.39-.39.39-1.022 0-1.413z"></path></g>
                </svg>
            </div>
            <hr>
        </div>
    </div>
    <div class="col-lg-12">
        @foreach($users as $user)
            @if(auth()->user()->isnot($user))
                @if(auth()->user()->following($user))
                    @else
                        <div class="d-flex  pb-3 pt-2 {{ $loop->last ? '':'border-bottom' }}">
                            <div class="flex-grow-1 text-truncate">
                                <div class="d-flex flex-row text-truncate">
                                    <div class="">
                                        <a href="{{ route('profile',$user) }}" class=" text-sm">
                                            <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-3" width="40px" >
                                        </a>
                                    </div>
                                    <div class="text-truncate">
                                        <a href="{{ route('profile',$user) }}" class="text-sm">
                                            {{ $user->name }}
                                            <br>
                                            <span class="text-muted">
                                                {{ '@' }}{{ $user->username }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-2">
                                @include('button.app')
                            </div>
                        </div>
                @endif
            @endif
        @endforeach

    </div>
</div>
