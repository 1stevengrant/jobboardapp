<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class JobOwnershipMiddleware
{
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $jobId = app()->router->getCurrentRoute()->getParameter('jobs');

        if (! $this->auth->user()->owns($jobId))
        {
            return \Redirect::route('jobs.index')
                ->with('flash_message', 'Authorization error: you do not own this job.');
        }

        return $next($request);
    }
}
