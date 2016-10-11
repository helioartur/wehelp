<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauseOwners extends Model {

	protected $table = 'cause_owners';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}