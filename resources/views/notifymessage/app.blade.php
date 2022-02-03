
  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="row flaot-right alert alert-danger notifymessages" role="alert">
            <div class="col-lg-10">
                {{ $error }}
            </div>
            <div class="col-lg-2">
                <span class="close float-right" data-dismiss="alert">close</span>
            </div>
        </div>
    @endforeach
  @endif

@if (session('success'))
    <div class="row flaot-right alert alert-danger notifymessages" role="alert">
        <div class="col-lg-10">
            {{ session('success') }}
        </div>
        <div class="col-lg-2">
            <span class="close float-right" data-dismiss="alert">close</span>
        </div>
    </div>
@endif
@if (session('error'))
        <div class="row flaot-right alert alert-danger notifymessages" role="alert">
            <div class="col-lg-10">
                {{ session('error') }}
            </div>
            <div class="col-lg-2">
                <span class="close float-right" data-dismiss="alert">close</span>
            </div>
        </div>
@endif
