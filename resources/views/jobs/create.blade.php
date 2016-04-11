@extends('layouts.app')

@section('title', 'Post new job')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>Post New Job</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      {!! Form::open(array('url' => 'jobs')) !!}
        <div class="form-group">
          <label for="title">Job Title</label>
          <input type="text"
                  name="title"
                  id="title"
                  placeholder="Associate Pastor"
                  class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Post Job</button>
        </div>

      {!! Form::close() !!}
    </div>
  </div>
@stop