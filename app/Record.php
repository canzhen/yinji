<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'record';
	protected $softDelete = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','albumId','name','description','picPath','showTime','created_at','updated_at'];
}
