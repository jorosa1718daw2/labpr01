<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bear extends Model
{
    public function user($param) {
        return $this->belongsTo('App\User');
    }
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('name', 'type', 'danger_level');
    public $timestamps = false;

}
