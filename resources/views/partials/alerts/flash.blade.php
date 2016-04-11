<div class="row">
  <div class="col-md-12">
    @if(Session::has('flash_message'))
      <div class="alert alert-success">
          {{ Session::get('flash_message') }}
      </div>
    @endif
  </div>
</div>