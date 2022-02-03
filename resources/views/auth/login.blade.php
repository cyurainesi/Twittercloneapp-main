@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
           @if (session('success'))
            <div class="col-lg-12 alert alert-danger" role="alert">
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

        <div class="col-lg-6 ml-3 mt-4 text-center">
            <div class="row">
                <div class="col-lg-12">
                    <svg viewBox="0 0 24 24" width="40px">
                        <g>
                        <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                        </path>
                        </g>
                    </svg>
                </div>
                <div class="col-lg-12 mt-3">
                   <h2> Log In To {{ config('app.name') }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 loginscreen mt-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group emaildiv row">
                    <label for="email" class="label pl-3 pt-1">{{ __('Email, Username') }}</label>

                        <input id="email" type="email" class="border-0 rounded-0 form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                </div>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-group passworddiv row">
                    <label for="password" class="pl-3 pt-1 label">{{ __('Password') }}</label>

                        <input id="password" type="password" class="border-0 rounded-0 form-control " name="password" required autocomplete="current-password">
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <div class="form-group logindown row mb-0">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn loginbutton p-2 btn-block ">
                            {{ __('Log In') }}
                        </button>

                       
                        <a type="button"  class="btn btn-link mt-2" href="{{ route('register') }}" data-toggle="modal" data-target="#staticBackdrop">
                            {{ __('SinUp For ?') }}{{ config('app.name') }}
                        </a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


  <!-- SinUp -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <div class="row p-3">
                <div class="col-lg-12">
                      <svg viewBox="0 0 24 24" width="20px">
                        <g>
                        <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                        </path>
                        </g>
                    </svg>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="col-lg-12 p-3">
                    
                    <h5 class="modal-title  font-weight-bold pb-2" id="">Create Your Account</h5>
                </div>
                <div class="col-md-11 sinupscreen ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group namediv row">
                                <div class="col-lg-12">
                                <label for="name" class="label  pl-3 pt-1">{{ __('Name') }}</label>
                            </div>
                            <div class="col-lg-12">
                                <input id="name" type="text" class="border-0 rounded-0" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group namediv row">
                            <div class="col-lg-12">
                                <label for="username" class="label  pl-3 pt-1">{{ __('username') }}</label>
                            </div>
                            <div class="col-lg-12">
                                <input id="username" type="text" class="border-0 rounded-0 " name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group emaildiv row">
                            <div class="col-lg-12">
                                <label for="email" class="label  pl-3 pt-1">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="col-lg-12">
                            <input id="email" type="email" class="border-0 rounded-0 " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group passworddiv row">
                            <div class="col-lg-12">
                            <label for="password" class="label  pl-3 pt-1">{{ __('Password') }}</label>
                            </div>
                            <div class="col-lg-12">
                                <input id="password" type="password" class="border-0 rounded-0 " name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group passworddiv row">
                            <div class="col-lg-12">
                            <label for="password-confirm" class="label pl-3 pt-1 ">{{ __('Confirm Password') }}</label>
                            </div>
                            <div class="col-lg-12">
                                <input id="password-confirm" type="password" class="border-0 rounded-0 " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group sinupdown row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn  p-2 btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
