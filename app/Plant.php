<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table = 'plants'; // a que tabla de la base de datos se hace referencia
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','disease_id','photo','enfermedad','plaga'
    ];
    public function disease()
    {
        return $this->belongsTo('App\Disease');
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
    public function scopeEnfermedades($query, $enfermedades) {
        if ($enfermedades) {
            return $query->where('enfermedad','like',"%$enfermedades%");
        }
    }

    public function scopePlagas($query, $plagas) {
        if ($plagas) {
            return $query->where('plaga','like',"%$plagas%");
        }
    }
}
