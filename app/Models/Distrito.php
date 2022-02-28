<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Departamento;
class Distrito extends Model
{
    use  SoftDeletes;
    use HasFactory;
    protected $table ='distritos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre_distritos',
    ];

    //relacion uno a muchos (inversa)
    public function distritos(){
        return $this->belongsTo(Departamento::class,'departamentos_id');
    }
}
