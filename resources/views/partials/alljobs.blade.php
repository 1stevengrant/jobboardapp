@if ($jobs->count() > 0)
    <ul class="list-group">
        @foreach ($jobs as $job)
            <li class="list-group-item  clearfix">

                <span class="pull-left">
                    {{ $job->title }}
                    @if($job->created_at->format('Y-m-d') == $today) <span class="label label-primary text-uppercase">posted today</span> @else <span class="label label-default text-uppercase">posted {{ $job->created_at->toFormattedDateString() }}</span> @endif
                </span>

                <div class="pull-right">
                    {{ Form::open([
                        'method' => 'DELETE',
                        'route' => ['jobs.destroy', $job->id]
                        ])
                    }}
                    <div class="btn-group">
                        <a href="/jobs/{{ $job->id }}/{{ $job->slug }}" class="btn btn-default"><i class="fa fa-eye"></i> View</a>
                        @include('partials.jobadmin')
                    </div>
                    {{ Form::close() }}
                </div>
            </li>
        @endforeach
    </ul>

    @include('partials.jobpagination')

@else
    <div class="alert alert-info">
        <p>No jobs right now</p>
    </div>
@endif