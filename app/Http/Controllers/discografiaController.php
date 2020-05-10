<?php

namespace App\Http\Controllers;
use \App\discografia;
use Illuminate\Http\Request;

class discografiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulario(){
        $d = discografia::all();
        $discografia = $d->all();
        return view("discografia", compact("discografia"));
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
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/discografia',$nombreFile);

        discografia::create(array(
            'titulo' => $request['titulo'],
            'imagen' => '/upload/discografia/'.$nombreFile,
            'fecha' => date("Y-m-d H:i:s"),
        ));
        return redirect("/admin/discografia/")->with('ok','Archivo agregado con exito!');
    }

    public function destroy($id){
        discografia::destroy($id);
        return redirect("/admin/discografia/")->with('ok','Archivo borrado con exito!');
    }

    public function edit($id){
       $discografia = discografia::find($id);
       return view("edit.discografia", compact("discografia"));
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
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/discografia',$nombreFile);
        $imagen         = '/upload/discografia/'.$nombreFile;

        $discografia = discografia::find($id);
        $form = array(
            'titulo' => $request->all()['titulo'],
            'imagen' => $imagen,
            'fecha' => date("Y-m-d H:i:s"),
        );

        $discografia->fill($form);
        $discografia->save();

        return redirect('/editar/discografia/'.$id)->with('ok','Archivo editado con exito!');
    }
}
