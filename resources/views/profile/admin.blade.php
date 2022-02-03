@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <h5>Suggestions</h5>
            <hr>
            @forelse ($suggestions as $suggest)
            <p>{{ $suggest->username }}  {{ $suggest->email }}</p>
            <small class="float-right">{{ $suggest->created_at->diffForHumans()}}</small>
            <p>{{ $suggest->suggestion }}</p>
            <hr>
            @empty
            nothing yet
            @endforelse

        </div>
        <div class="col-lg-5">
            <div class="card text-primary">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5>Connect</h5>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        {{ $users }}
                    </li>
                    <li class="list-group-item">
                        {{ $suggestion }} Suggestions
                    </li>

                  <li class="list-group-item">
                   <i class="fa fa-twitter" aria-hidden="true"></i>
                   {{ $tweets }}
                  </li>
                  <li class="list-group-item">
                   <i class="fa fa-comments-o" aria-hidden="true"></i>
                   {{ $comments }}
                  </li>
                  <li class="list-group-item">
                   <i class="fa fa-reply" aria-hidden="true"></i>
                   {{ $replies }}
                  </li>
                </ul>
              </div>
        </div>
    </div>
</div>
@endsection
