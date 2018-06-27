<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Table Name
    protected $table = 'items';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
