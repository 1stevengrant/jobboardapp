@extends('layouts.app')

@section('title', $job->title)

@section('content')

  <div class="row">
    <div class="col-md-4">
      @include('partials.jobadmin')
    </div>
      <div class="col-md-8">
          <h1>{{ $job->title }}</h1>
          <hr>
          <p><label class="label-success">{{ $job->job_type }}</label> <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $job->job_location }}</p>
      </div>
  </div>
@stop