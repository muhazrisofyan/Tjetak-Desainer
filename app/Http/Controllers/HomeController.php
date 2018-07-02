<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Design_job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Design_job::all();
        return view('job.home', compact('jobs'));

    }

    public function myjob()
    {
      $id = Auth::user()->id;
      $myJobs = Design_job::where('user_id', $id)->get();
        return view('job.myjob', compact('myJobs'));
    }

    public function jobDetail()
    {
        return view('job.detail');
    }

    public function myJobDetail()
    {
        return view('job.myjobdetail');
    }
}
