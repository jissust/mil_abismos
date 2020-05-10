<?php

namespace App\Http\Controllers;

use App\discografia;
use \App\galeria;
use Illuminate\Http\Request;

class galeriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulario(){
        $g = galeria::all();
        $galeria = $g->all();

       return view("galeria", compact("galeria"));
    }

    public function grabar(Request $request){
        $campos = [
            'file' => 'required'
        ];

        $mensaje = [
            "required" => "El campo :attribute es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/galeria',$nombreFile);

        galeria::create(array(
            'titulo' => ( ! empty($request['texto']))?$request['texto']:"",
            'imagen' => '/upload/galeria/'.$nombreFile,
            'orden' => 0,
            'fecha' => date("Y-m-d H:i:s"),
        ));

        return redirect("/admin/galeria/")->with('ok','Archivo agregado con exito!');
    }

    public function destroy($id){
        galeria::destroy($id);
        return redirect("/admin/galeria/")->with('ok','Archivo borrado con exito!');
    }

    public function edit($id){
        $galeria = galeria::find($id);
        return view("edit.galeria",compact("galeria"));
    }

    public function update(Request $request){
        $campos = [
            'file' => 'required',
        ];

        $mensaje = [
            "required" => "El campo :attribute es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $id = $request->id;

        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/galeria',$nombreFile);
        $imagen         = '/upload/galeria/'.$nombreFile;
        $galeria = galeria::find($id);

        $form = array(
            'titulo' => $request->all()['texto'],
            'imagen' => $imagen,
            'orden' => 0,
            'fecha' => date("Y-m-d H:i:s"),
        );

        $galeria->fill($form);
        $galeria->save();

        return redirect('/editar/galeria/'.$id)->with('ok','Archivo editado con exito!');
    }
}
