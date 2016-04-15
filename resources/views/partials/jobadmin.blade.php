@if($user)

        @if($job->user->id == $user->id)
            <a href="/jobs/{{ $job->id }}/edit" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>

            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete Job
            </button>

        @endif

@endif