<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases'; // a que tabla de la base de datos se hace referencia
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','control_quimico','prevencion','control_biologico','control_cultural'
    ];
    public function plants()
    {
        return $this->hasMany('App\Plant');
    }
    public function scopeNombres($query, $nombres) {
        if ($nombres) {
            return $query->where('name','like',"%$nombres%");
        }
    }
    public function scopeDescripciones($query, $descripciones) {
        if ($descripciones) {
            return $query->where('description','like',"%$descripciones%");
        }
    }

}
