<?php

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
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
			  "name": "Java",
			  "applicant_id": 1,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 2,
			  "name": "C",
			  "applicant_id": 1,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 3,
			  "name": "C++",
			  "applicant_id": 1,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 4,
			  "name": "Javascript",
			  "applicant_id": 2,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 5,
			  "name": "C",
			  "applicant_id": 2,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 6,
			  "name": "PHP",
			  "applicant_id": 3,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 7,
			  "name": "C",
			  "applicant_id": 4,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 8,
			  "name": "Python",
			  "applicant_id": 4,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 9,
			  "name": "HTML",
			  "applicant_id": 4,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 10,
			  "name": "Fireworks",
			  "applicant_id": 5,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 11,
			  "name": "Fireworks",
			  "applicant_id": 6,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 12,
			  "name": "Illustrator",
			  "applicant_id": 7,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}, {
			  "id": 13,
			  "name": "Fireworks",
			  "applicant_id": 8,
			  "created_at": "2014-01-08 17:13:29",
			  "updated_at": "2014-01-08 17:13:29"
			}]';

        $skills = json_decode($json);
        foreach($skills as $skill) {
        	$new_object = new \App\Models\Skill;
        	$new_object->fill((array)$skill);
        	$new_object->save();
        }
    }
}
