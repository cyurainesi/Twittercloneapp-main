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
        <div class="col-lg-4  border border-bottom-0">
            <div class="row">
                <div class="col-lg-12 pt-2 pl-3 border-bottom">
                    <div class="d-flex flex-row">
                        <div class="flex-grow-1 font-weight-bold">
                            <h4>Messages</h4>
                        </div>
                        <div class="">
                            <svg viewBox="0 0 24 24" class="" width="20px">
                                <g>
                                    <path d="M23.25 3.25h-2.425V.825c0-.414-.336-.75-.75-.75s-.75.336-.75.75V3.25H16.9c-.414 0-.75.336-.75.75s.336.75.75.75h2.425v2.425c0 .414.336.75.75.75s.75-.336.75-.75V4.75h2.425c.414 0 .75-.336.75-.75s-.336-.75-.75-.75zm-3.175 6.876c-.414 0-.75.336-.75.75v8.078c0 .414-.337.75-.75.75H4.095c-.412 0-.75-.336-.75-.75V8.298l6.778 4.518c.368.246.79.37 1.213.37.422 0 .844-.124 1.212-.37l4.53-3.013c.336-.223.428-.676.204-1.012-.223-.332-.675-.425-1.012-.2l-4.53 3.014c-.246.162-.563.163-.808 0l-7.586-5.06V5.5c0-.414.337-.75.75-.75h9.094c.414 0 .75-.336.75-.75s-.336-.75-.75-.75H4.096c-1.24 0-2.25 1.01-2.25 2.25v13.455c0 1.24 1.01 2.25 2.25 2.25h14.48c1.24 0 2.25-1.01 2.25-2.25v-8.078c0-.415-.337-.75-.75-.75z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 border-top border-bottom p-3">
                    @if (auth()->check())
                        @include('search.app')
                    @endif
                </div>
                <div class="col-lg-12 text-center mt-4">
                    <h4>Send a message, get a message</h4>
                    <p>Direct Messages are private conversations between you and other people on Twitter. Share Tweets, media, and more!</p>
                    <button class="btn conversation">Start a Conversation</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4 leftsidemessage pt-3 text-center" >
            <div class="">
                <h4>You don’t have a message selected</h4>
                <p>Choose one from your existing messages, or start a new one.</p>
                <button class="btn conversation">Start a Conversation</button>
            </div>
        </div>
    </div>
</div>
@endsection
