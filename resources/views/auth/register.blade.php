@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 sinupscreen mt-5 pt-5">
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
@endsection
