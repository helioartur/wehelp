<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauseHelpers extends Model {

	protected $table = 'cause_helpers';
	public $timestamps = true;

	use SoftDeletes;

	protected $fillable = ['cause_id','user_id','user_create_id'];

	protected $dates = ['deleted_at'];

}