<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //Table name
    protected $table = 'posts';

    //Primary Key
    public $PrimaryKey = 'id';

    //Time stamp
    public $timestamps = true;

    public function user(){

    	return $this->belongsTo('App\User');
    }
}
