@if($user)
    <div class="pull-right">
        @if($job->user->id == $user->id)
            <a href="/jobs/{{ $job->id }}/edit" class="btn btn-default">Edit</a>
            <div class="form-group">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['jobs.destroy', $job->id]
                  ])
                !!}
                {!! Form::submit('Delete this job?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        @endif
    </div>
@endif