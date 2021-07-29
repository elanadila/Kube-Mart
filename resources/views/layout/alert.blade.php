@if(Session::has('info'))
  <div class="alert alert-info">
    {!! Session::get('info') !!}
  </div>
@endif

@if(Session::has('danger'))
  <div class="alert alert-danger">
    {!! Session::get('danger') !!}
  </div>
@endif

@if(Session::has('warning'))
  <div class="alert alert-warning">
    {!! Session::get('warning') !!}
  </div>
@endif

@if(Session::has('success'))
  <div class="alert alert-success">
    {!! Session::get('success') !!}
  </div>
@endif
