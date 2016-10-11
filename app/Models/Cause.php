<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cause extends Model {

	protected $table = 'causes';
	public $timestamps = true;
	protected $fillable = ['title','description','end_date','start_date','location_id','user_create_id'];

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}