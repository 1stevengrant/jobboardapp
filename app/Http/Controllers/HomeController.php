<?php

namespace App\Http\Controllers;
use App\Job;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        $jobs = Job::with('user')->orderBy('created_at', 'desc')->paginate(5);
        return view('welcome', compact('jobs'));
    }
}
