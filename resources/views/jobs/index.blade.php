@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')

    <h1>Your posted jobs</h1>

    @include('partials.alljobs')

@stop