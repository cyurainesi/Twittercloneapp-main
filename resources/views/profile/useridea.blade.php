@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center mt-5">
         @if (session('success'))
            <div class="col-lg-12 alert alert-success" role="alert">
                <div class="row">
                <div class="col-lg-10">
                        {{ session('success') }}
                    </div>
                    <div class="col-lg-2">
                        <span class="close float-right" data-dismiss="alert">close</span>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-lg-5">
            <h1>GoodBye, </h1>
            Before Deleting account Say Something Pleaze!!!!🤗
            <div class="row">
                <div class="col-lg-12">
                    {!! Form::open(array('action' => array('ProfilesController@sugg')), (array('method' => array('POST')))) !!}
                    @csrf
                    <div class="form-group">
                        <textarea id="my-textarea" placeholder="Any Suggestions??? " class="form-control" name="suggestion" rows="3"></textarea>

                    </div>
                    <div class="form-group">
                        <button type="submit"  class="btn btn-primary btn-block">Send</button>
                    </div>
                    {!! Form::close() !!}

                    <div class="form-group">
                        {!! Form::open(array('action' => array('ProfilesController@destroy', $user->username)), (array('method' => array('POST')))) !!}
                        @csrf
                        <button type="submit" class="mt-3 btn btn-outline-danger">Disable account</button>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
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
    </div>
</div>
@endsection
