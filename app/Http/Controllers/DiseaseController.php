<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Plant;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $r)
    {
        $diseases= Disease::all();
        return view('diseases.index',['diseases'=> $diseases]);
    }
    public function create()
    {

        return view('diseases.create');
    }
    public function store(Request $r)
    {
        $inputs = $r->all();
        $disease= new Disease(['name'=> $inputs['name'],
            'description'=> $inputs['description'],
            'control_quimico'=> $inputs['controlquimico'],
            'control_biologico'=> $inputs['controlbiologico'],
            'control_cultural'=> $inputs['controlcultural'],
            'prevencion'=> $inputs['prevencion']
        ]);
        $disease->save();
        return redirect('/diseases');
    }
    public function edit($id)
    {
        $disease = Disease::find($id);
        return view('diseases.edit', ['disease'=>$disease]);
    }
    public function update($id, Request $r)
    {
        $inputs = $r->all();
        $disease = Disease::find($id);

        $disease->update(['name'=> $inputs['name'],
            'description'=> $inputs['description'],
            'control_quimico'=> $inputs['controlquimico'],
            'control_biologico'=> $inputs['controlbiologico'],
            'control_cultural'=> $inputs['controlcultural'],
            'prevencion'=> $inputs['prevencion']
        ]);
        return redirect('/diseases');
    }
    public function destroy($id)
    {
        $diseases = Disease::find($id);
        $diseases->delete();
        return redirect('/diseases');

    }
    public function search(Request $request)
    {
        $diseases = Disease::all();
        $nombre = $request->get('buscador');
        $descripcion = $request->get('descrip');;
        $diseases= Disease::nombres($nombre)->descripciones($descripcion)->paginate(5);

        return view('diseases.search',['diseases'=> $diseases]);
    }
}
