<?php

namespace App\Http\Controllers;
use \App\escuchanos;
use Illuminate\Http\Request;

class escuchanosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulario(){
        $e = escuchanos::all();
        $escuchanos = $e->all();

        return view("escuchanos",compact('escuchanos'));
    }

    public function grabar(Request $request){
        $campos = [
            'file' => 'required'
        ];

        $mensaje = [
            "required" => "El campo imagen es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/escuchanos',$nombreFile);

        escuchanos::create(array(
            'imagen' => '/upload/escuchanos/'.$nombreFile,
            'texto' => (! empty($request['texto']))?$request['texto']:"",
            'fecha' => date("Y-m-d H:i:s")
        ));

        return redirect("/admin/escuchanos")->with('ok','Archivos grabados con exito!');
    }

    public function destroy($id){
        escuchanos::destroy($id);
        return redirect("/admin/escuchanos")->with('ok','Archivo borrados con exito!');
    }

    public function edit($id){
        $escuchanos = escuchanos::find($id);
        return view('edit.escuchanos', compact('escuchanos'));
    }

    public function update(Request $request){

        $campos = [
            'file' => 'required'
        ];

        $mensaje = [
            "required" => "El campo imagen es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $id = $request->id;
        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/escuchanos',$nombreFile);
        $imagen         = '/upload/escuchanos/'.$nombreFile;

        $escuchanos = escuchanos::find($id);
        $form = array(
            'imagen' => $imagen,
            'texto' => $request->all()['texto'],
            'fecha' => date("Y-m-d H:i:s")
        );
        $escuchanos->fill($form);
        $escuchanos->save();

        return redirect('/editar/escuchanos/'.$id)->with('ok','Archivo editados con exito!');

    }
}
