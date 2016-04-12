@extends('layouts.app')

@section('title', 'Edit Job ' . $job->title . ' - Job ID ' )

@section('content')

  <div class="row">
    <div class="col-md-6">
      <h1>Editing {{ $job->title }}</h1>
      <p class="lead">Edit this job below. <a href="/jobs">Go back to all jobs.</a></p>
      <hr>
      {!! Form::model($job, [
        'method' => 'PATCH',
        'route' => ['jobs.update', $job->id]
      ]) !!}

      <div class="form-group">
        {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>

      {!! Form::submit('Update Job', ['class' => 'btn btn-primary']) !!}

      {!! Form::close() !!}
    </div>

  </div>
@stop