@if ($jobs->count() > 0)
    <ul class="list-group">
        @foreach ($jobs as $job)
            <li class="list-group-item  clearfix">

                <span class="pull-left">
                    {{ $job->title }} / {{ $job->created_at->format('d-m-Y') }}
                </span>

                <div class="pull-right">
                    <a href="/jobs/{{ $job->id }}/{{ $job->slug }}" class="btn btn-default">View</a>
                    @include('partials.jobadmin')
                </div>
            </li>
        @endforeach
    </ul>
@else
    <div class="alert alert-info">
        <p>No jobs right now</p>
    </div>
@endif