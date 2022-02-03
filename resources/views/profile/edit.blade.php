@extends('layouts.app')
@section('content')
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

    <div class="col-lg-5 border">
        <div class="row">
            <div class="col-lg-12 sticky-top bg-white border-bottom ">
                <div class="d-flex pt-2 flex-row">
                    <div class="p-2">
                        <p>
                            <svg class="arrowleft" viewBox="0 0 20 20" width="20px">
                                <path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
                                L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
                                c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
                                c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
                                S18.707,9.212,18.271,9.212z"></path>
                            </svg>
                        </p>
                    </div>

                    <div class="p-2 font-weight-bold">
                        {{ 'Updating' }}
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-5">
                    {!! Form::open(array('action' => array('ProfilesController@update', $user->username)), (array('method' => array('POST'))), (array('enctype' => array('multipart/form-data')))) !!}
                    @csrf
                        <div class="form-group updatediv row">
                            <label for="name" class="col-md-12 col-form-label  ">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name"  value="{{$user->name}}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group updatediv row">
                            <label for="username" class="col-md-12 col-form-label  ">{{ __('username') }}</label>

                            <div class="col-md-12">
                                <input id="username" type="text" class="  @error('username') is-invalid @enderror" name="username"  value="{{$user->username}}"  autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group updatediv row">
                            <label for="bio" class="col-md-12 col-form-label">{{ __('Bio') }}</label>

                            <div class="col-md-12">
                                <textarea class=" " name="bio">
                                </textarea>
                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group updatediv row">
                            <label for="email" class="col-md-12 col-form-label ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="  @error('email') is-invalid @enderror" name="email" value="{{$user->email}}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group updatediv row">
                            <label for="website" class="col-md-12 col-form-label">{{ __('website') }}</label>

                            <div class="col-md-12">
                                <input id="website" type="text" class="  @error('website') is-invalid @enderror" name="website" autocomplete="website">

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group updatediv row">
                            <label for="birthdate" class="col-md-12 col-form-label  ">{{ __('birthdate') }}</label>

                            <div class="col-md-12">
                                <input id="birthdate" type="date" class="@error('birthdate') is-invalid @enderror" name="birthdate"  autocomplete="birthdate">

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group updatediv row">
                            <label for="password" class="col-md-12 col-form-label  ">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group updatediv row">
                            <label for="password-confirm" class="col-md-12 col-form-label  ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group updatebutton row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-block">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
          </div>

        <div class="col-lg-3 leftside p-3 rounded-lg">
            <div class="row sticky-top">

                <div class="col-lg-12 pb-4 pt-4">
                    @if (auth()->check())
                        @include('search.app')
                    @endif
                </div>
                <div class="col-lg-12">
                    <div class="card" style="width: 18rem;">
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

                <div class="col-lg-12 mt-4">
                    @include('terms.app')
                </div>

            </div>
        </div>
</div>
@endsection

