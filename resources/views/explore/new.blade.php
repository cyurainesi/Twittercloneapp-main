<div class="row  p-2 ml-1">
    <div class="col-lg-12">
        @forelse ($trendtoptweets as $tweet)
            <div class="d-flex justify-content-start pb-3 pt-2 {{ $loop->last ? '':'border-bottom' }}">
                <div class="text-truncate">
                    <a href="{{ route('profile',$tweet->user ) }}" class="text-muted">
                        {{ '@' }}{{ $tweet->user->username }}
                    </a>
                </div>
                <div class="pl-2">
                    dsfgjb
                </div>
            </div>
        @empty
            <p class="mt-5 text-muted text-center">N0 Tweets yet</p>
        @endforelse


    </div>
    <div class="col-lg-12">
        <a href="{{ route('explore') }}">
            <div class="" width="100%">
                Find More Tweets
            </div>
        </a>
    </div>

</div>
