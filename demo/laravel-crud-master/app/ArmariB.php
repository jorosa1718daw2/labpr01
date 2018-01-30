<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArmariB extends Model
{
    public function user($param) {
        return $this->belongsTo('App\User');
    }
    protected $table = 'ArmariB';
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('nom_armari', 'nom_producte', 'stock_inicial','stock_actual','proveedor','referencia_proveedor','marca_equip','num_lot');
    public $timestamps = false;
}
