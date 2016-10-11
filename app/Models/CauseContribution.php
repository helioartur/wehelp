<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauseContribution extends Model {

	protected $table = 'cause_contributions';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}