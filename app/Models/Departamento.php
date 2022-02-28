<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Provincia;
use App\Models\Distrito;
class Departamento extends Model
{
    use  SoftDeletes;
    use HasFactory;
    protected $table ='departamentos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre_departamento',
    ];

    //relaciones uno a muchos
    public function privincias(){
        return $this->hasMany(Provincia::class,'id');
    } 

    //relaciones uno a muchos
    public function distritos(){
        return $this->hasMany(Distrito::class,'id');
    }
}
