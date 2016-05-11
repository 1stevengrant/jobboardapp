@if($loggedIn and ($job->user_id == $currentUser->id))
    <a href="/jobs/{{ $job->id }}/edit" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
    <button type="submit" onclick="return confirm('Are you sure you wish to delete this job?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete Job</button>
@endif