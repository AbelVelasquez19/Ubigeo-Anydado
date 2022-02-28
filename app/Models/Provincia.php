<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Departamento;
class Provincia extends Model
{
    use  SoftDeletes;
    use HasFactory;
    protected $table ='provincias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre_provincias',
    ];

    //relacion uno a muchos (inversa)
    public function departamentos(){
        return $this->belongsTo(Departamento::class,'departamentos_id');
    }
}
