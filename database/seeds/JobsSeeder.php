<?php

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$json = '[{
			  "id": 1,
			  "name": "Web Developer",
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 2,
			  "name": "Designer",
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}]';

        $jobs = json_decode($json);
        foreach($jobs as $job) {
        	$new_object = new \App\Models\Job;
        	$new_object->fill((array)$job);
        	$new_object->save();
        }
    }
}
