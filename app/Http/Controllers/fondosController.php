<?php

namespace App\Http\Controllers;

use \App\fondos;
use Illuminate\Http\Request;

class fondosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulario(){
        $f = fondos::all();
        $fondos = $f->all();
        return view("fondos", compact("fondos"));
    }

    public function grabar(Request $request){

        $campos = [
            'file' => 'required',
            'titulo' => 'required'
        ];

        $mensaje = [
            "required" => "El campo :attribute es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $file = $request->file("file");
        $extension = $file->clientExtension();
        $nombre = $request["titulo"];
        $nombreFile = $nombre . ".". $extension;
        $request->file->move('upload/fondos',$nombreFile);

        fondos::create(array(
            'ruta' => '/upload/fondos/'.$nombreFile,
            'nombre' => $nombre,
        ));

        return redirect("/admin/fondos/")->with('ok','Archivo agregado con exito!');
    }

    public function destroy($id){
        fondos::destroy($id);
        return redirect("/admin/fondos/")->with('ok','Archivo borrado con exito!');
    }

    public function edit($id){
        $fondos = fondos::find($id);
        return view("edit.fondo", compact("fondos"));
    }

    public function update(Request $request){
        $campos = [
            'file' => 'required',
            'titulo' => 'required'
        ];

        $mensaje = [
            "required" => "El campo :attribute es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $id = $request->id;
        $file = $request->file("file");
        $extension = $file->clientExtension();
        $nombre = $request["titulo"];
        $nombreFile = $nombre . ".". $extension;
        $request->file->move('upload/fondos',$nombreFile);

        $fondos = fondos::find($id);
        $form = array(
            'ruta' => '/upload/fondos/'.$nombreFile,
            'nombre' => $nombre,
        );

        $fondos->fill($form);
        $fondos->save();

        return redirect('/editar/fondos/'.$id)->with('ok','Archivo editado con exito!');
    }

}
