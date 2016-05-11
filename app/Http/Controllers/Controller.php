<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

        $this->currentUser = auth()->user();
        view()->share('currentUser', $this->currentUser);

        view()->share('app_name', 'The Gospel Coalition Job Board');
        view()->share('date_short', 'm d Y');

        view()->share('today', Carbon::today()->format('Y-m-d'));
        view()->share('beforeToday', Carbon::today()->subDays(650)->format('Y-m-d G:H:i'));
        view()->share('loggedIn', Auth::check());
        view()->share('loggedInUser', Auth::user());

    }
}
