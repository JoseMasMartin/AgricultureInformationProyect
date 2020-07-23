<?php
namespace App\Http\Controllers;

use App\Plague;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PlagueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $r)
    {
        $pests= Plague::all();
        return view('pests.index',['pests'=> $pests]);
    }
    public function create()
    {
        return view('pests.create');
    }
    public function store(Request $r)
    {
        $inputs = $r->all();
        $plague= new Plague(['name'=> $inputs['name'],
            'description'=> $inputs['description'],
            'control_quimico'=> $inputs['controlquimico'],
            'control_biologico'=> $inputs['controlbiologico'],
            'control_cultural'=> $inputs['controlcultural'],
            'prevencion'=> $inputs['prevencion']
        ]);
        if($r->hasFile('imagen')) {

            $img = $r->file('imagen');
            $extension = $img->clientExtension();
            $plague->photo = 'uploads/' . $img->getFilename() . '.' . $extension;

            Storage::disk('public')->put($img->getFilename() . '.' . $extension, File::get($img));
        }
        $plague->save();
        return redirect('/pests');
    }
    public function edit($id)
    {
        $plague = Plague::find($id);
        return view('pests.edit', ['plague'=>$plague]);
    }
    public function update($id, Request $r)
    {
        $inputs = $r->all();
        $plague = Plague::find($id);
        if($r->hasFile('imagen')) {
            // aquí compruebo que exista la foto anterior
            File::delete($plague->photo);
            $img = $r->file('imagen');
            $extension = $img->clientExtension();
            Storage::disk('public')->put($img->getFilename() . '.' . $extension, File::get($img));
            $plague->photo = 'uploads/' . $img->getFilename() . '.' . $extension;
            //uploads/File_name.pn
        }
        $plague->name = $inputs['name'];
        $plague->description = $inputs['description'];
        $plague->control_quimico = $inputs['controlquimico'];
        $plague->control_biologico = $inputs['controlbiologico'];
        $plague->control_cultural = $inputs['controlcultural'];
        $plague->prevencion = $inputs['prevencion'];

        $plague->save();

        return redirect('/pests');
    }
    public function destroy($id)
    {
        $pests = Plague::find($id);
        File::delete($pests->photo);
        $pests->delete();
        return redirect('/pests');
    }
    public function search(Request $request)
    {
        $pests = Plague::all();
        $nombre = $request->get('buscador');
        $descripcion = $request->get('descrip');;
        $pests= Plague::nombres($nombre)->descripciones($descripcion)->paginate(5);
        return view('pests.search',['pests'=> $pests]);
    }
}
