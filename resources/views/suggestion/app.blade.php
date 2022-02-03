
    <div class="col-lg-12 text-truncate friendlistedlefttofollow">
        <div class="row">
            <div class="col-lg-12 p-2">
                <h5>Who to follow</h5>
            </div>
            <div class="col-lg-12">
                @forelse($suggestedusers as $user)
                    @if(auth()->user()->isnot($user))
                        @if(auth()->user()->following($user))
                            @else
                                <div class="d-flex text-truncate pb-3  friendlistedleftsecond pt-2 {{ $loop->last ? '':'border-bottom' }}">
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
                                    <div class="pl-2">
                                        @include('button.app')
                                    </div>
                                </div>
                            @endif
                        @endif
                     @empty
                    <p>No Users Found</p>
                 @endforelse
            </div>
            <div class="col-lg-12 friendlistedleftsecond p-2">
                <a href="{{ route('suggestions') }}">
                    show more
                </a>
            </div>
        </div>
    </div>

