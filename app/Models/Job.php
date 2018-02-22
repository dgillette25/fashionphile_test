<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'name'
    ];

    public function applicants()
    {
        return $this->hasMany('App\Models\Applicant');
    }

    // Get Total Skills for connected to the job
    public function getSkillCount(){
    	$count = 0;
    	foreach(\App\Models\Applicant::where('job_id', $this->id)->get() as $applicant){
    		$count += $applicant->skills->count();
    	}
    	return $count;
    }
}
