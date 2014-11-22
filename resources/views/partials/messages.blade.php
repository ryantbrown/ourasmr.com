@if (Session::has('errors'))
<div class="alert alert-danger alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
  </button>
  <strong>Oops! Looks like there was an issue</strong><br>
  @foreach($errors->all() as $error) {{ $error }} <br> @endforeach
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
  </button>
  <strong>Oops!</strong> {{ Session::get('error') }}
</div>
@endif

@if (Session::has('message'))
<div class="alert alert-info alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
  </button>
  <strong>Heads Up!</strong> {{ Session::get('message') }}
</div>
@endif