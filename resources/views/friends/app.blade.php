<div class="row  p-2 ml-1">
    <div class="col-lg-12">
        @forelse (auth()->user()->follows as $user)
            @if(auth()->user()->isnot($user))
            <div class="d-flex justify-content-start pb-3 pt-2 {{ $loop->last ? '':'border-bottom' }}">
                <div class="">
                    <a href="{{ route('profile',$user) }}" class="flex items-center  text-sm">
                        <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' alt="imagefrined" class="rounded-full mr-3" width="40px" >
                    </a>
                </div>
                <div class="text-truncate">
                    <a href="{{ route('profile',$user) }}" class="flex items-center  text-sm">
                        {{ $user->name }}
                        <br>
                        <span class="text-muted">{{ '@' }}{{ $user->username }}</span>
                    </a>
                </div>
                <div class="pl-2">
                    @include('button.app')
                </div>
            </div>
            @endif
        @empty
            <p class="mt-5 text-muted text-center">NO Users You Follow yet</p>
        @endforelse


    </div>
    <div class="col-lg-12">
        <a href="{{ route('explore') }}">
            <div class="" width="100%">
                Find More Connections
            </div>
        </a>
    </div>

</div>
