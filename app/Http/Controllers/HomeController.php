<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Job;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('welcome', compact('jobs'));
    }
}
