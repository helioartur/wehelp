<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model {

	protected $table = 'documents';
	public $timestamps = true;
    
    protected $fillable = ['name','item_id','item_type','fullpath','mimetype','mediatype','user_create_id'];
	use SoftDeletes;

	protected $dates = ['deleted_at'];

}