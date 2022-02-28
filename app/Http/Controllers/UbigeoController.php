<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
class UbigeoController extends Controller
{
    public function index(){
        return view('ubigeo');
    }

    public function gedDepartamento(){
        $departamentos = Departamento::all();    
        return response()->json([
            'departamentos'=>$departamentos
        ]);
    }

    public function gedProvincia($id = 0){
        if($id != 0){
            $provincias = Provincia::where('departamentos_id',$id)->get();
            return response()->json([
                'provincias'=>$provincias
            ]);
        }else{
            $provincias = Provincia::all();
            return response()->json([
                'provincias'=>$provincias
            ]);
        }
    }

    public function gedDistrito($id = 0){
        if($id != 0){
            $distritos = Distrito::where('provincias_id',$id)->get();
            return response()->json([
                'distritos'=>$distritos
            ]);
        }else{
            $distritos = Distrito::all();
            return response()->json([
                'distritos'=>$distritos
            ]);
        }
    }
}
