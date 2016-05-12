@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $user->name }}</h1>

            <ul class="list-group">
                @if($user->profile->org_name)
                <li class="list-group-item">
                    {{ $user->profile->org_name }}
                </li>
                @endif

                @if($user->profile->org_type)
                <li class="list-group-item">
                    {{ $user->profile->org_type }}
                </li>
                @endif

                @if($user->profile->org_url)
                <li class="list-group-item">
                    <a href="{{ $user->profile->org_url }}">Visit our website</a>
                </li>
                @endif

                @if($user->profile->org_twitter)
                <li class="list-group-item">
                    <a href="{{ url('https://twitter.com' . $user->profile->org_twitter) }}">Find us on Twitter</a>
                </li>
                @endif

            </ul>

            @if($loggedIn and ($currentUser->id == $user->id))
                <a href="{{ url('profile/' . $user->id . '/edit') }}" class="btn btn-default">Edit Profile</a>
            @endif

        </div>
    </div>
@stop