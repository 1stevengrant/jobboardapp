@extends('layouts.app')

@section('title', $job->title)

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>{{ $job->title }}</h1>
      @include('partials.jobadmin')
    </div>
  </div>
@stop