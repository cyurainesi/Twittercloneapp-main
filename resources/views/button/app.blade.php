
@if(auth()->user()->is($user))
<a href="{{ route('profileedit',$user->username) }}/edit" class="btn btn-sm btn-default text-dark border text-truncate" type="submit" style="border-radius:37px;">
    Edit profile
</a>

<a href="{{ route('bye') }}" class="ml-2 btn btn-sm btn-outline-danger" style="border-radius:37px;">Disable account</a>

@else

{!! Form::open(array('action' => array('FollowController@store', $user->username)), (array('method' => array('POST')))) !!}
    @csrf
    <button class="btn {{auth()->user()->following($user)?' btn-primary-following':'btn-outline-primary-follow '}} btn-sm text-xs text-truncate" type="submit" style="border-radius:37px ">
        {{ auth()->user()->following($user)? 'Following':'Follow ' }}
    </button>

{!! Form::close() !!}
@endif
