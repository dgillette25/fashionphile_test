<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
    	$jobs = \App\Models\Job::all();
    	
    	return view('welcome', [
    		'jobs' => $jobs
    	]);
    }
}
