<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use App\Job;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class JobController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('jobowner', ['only' => ['edit', 'update', 'destroy']]);

        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // display jobs posted by the current user
        $jobs = User::find(\Auth::id())->jobs()->orderBy('created_at', 'desc')->paginate(10);
        return view('jobs.index')->withJobs($jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // display the form to create a new job
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $job = new Job(array(
            'title' => $request->get('title')
        ));

        $user = User::find(\Auth::id());

        $job = $user->jobs()->save($job);

        return \Redirect::route('jobs.index',
            array($job->id))->with('flash_message', 'Your job has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $job = Job::find($id);
        return view('jobs.show', array('job' => $job));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit')->withJob($job);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = \Auth::user();

        $job = Job::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
        ]);

        $job->update([
            'title' => $request->get('title')
        ]);

        return \Redirect::route('jobs.index',
            array($job->id))->with('flash_message', 'Your job has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        $job->delete();

        return \Redirect::route('jobs.index',
            array($job->id))->with('flash_message', 'Your job has been deleted!');
    }
}
