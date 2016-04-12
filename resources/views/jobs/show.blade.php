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
      </div>
  </div>
@stop