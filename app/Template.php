<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'templates';
    protected $softDelete = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['template_name','author_name','description','saving_path'];
}
