<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Healthinfo extends Model
{
    //
	protected $fillable = ['patient_id','symptoms','bg','genotype'];
}
