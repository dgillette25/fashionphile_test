<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';

    protected $fillable = [
        'name', 'emails', 'website', 'cover_letter'
    ];

    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }
}
