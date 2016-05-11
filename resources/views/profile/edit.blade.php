@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit Profile</h1>

            <pre>
                {{ $user }}
            </pre>

            {{ Form::model($user, array('route' => array('profile.update', $user->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('org_name', 'Organisation Name', ['class' => 'control-label']) !!}
                {!! Form::text('org_name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {{ Form::label('org_type', 'Organisation Type') }}
                {{ Form::text('org_type', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('org_url', 'Organisation website') }}
                {{ Form::text('org_url', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('org_twitter', 'Organisation Twitter') }}
                {{ Form::text('org_twitter', null, ['class' => 'form-control']) }}
            </div>


            <button class="btn btn-default">Update Profile</button>

            {{ Form::close() }}
        </div>
    </div>
@stop