<?php

namespace App\Http\Middleware;

use App\Profile;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class ProfileOwnershipMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $profileId = $request->segments()[1];
        $profile = Profile::findOrFail($profileId);

        if ($profile->user_id !== $this->auth->getUser()->id) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }

}
