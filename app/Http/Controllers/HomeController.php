<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('job.home');
    }

    public function myjob()
    {
        return view('job.myjob');
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
