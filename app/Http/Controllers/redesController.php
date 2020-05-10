<?php

namespace App\Http\Controllers;
use \App\redes;
use Illuminate\Http\Request;

class redesController extends Controller
{
    public function formulario(){
        $redes = redes::all();
        return view("redes", compact("redes"));
    }

    public function grabar(Request $request){

        $campos = [
            'file' => 'required',
            'direccion' => 'required',
            'nombre' => 'required'
        ];

        $mensaje = [
            "required" => "El campo :attribute es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/iconos',$nombreFile);

        redes::create(array(
            'direccion' => $request['direccion'],
            'icono' => $request['nombre'],
            'nombre' => $request['nombre'],
            'ruta' => "/upload/iconos/" . $nombreFile,
            'fecha' => date("Y-m-d H:i:s"),
        ));

        return redirect("/admin/redes")->with('ok','Archivo agregado con exito!');
    }

    public function destroy($id){
        redes::destroy($id);
        return redirect("/admin/redes")->with('ok','Archivo borrado con exito!');
    }

    public function edit($id){
        $redes = redes::find($id);
        return view('edit.redes', compact('redes'));
    }

    public function update(Request $request){

        $campos = [
            'file' => 'required',
            'direccion' => 'required',
            'nombre' => 'required'
        ];

        $mensaje = [
            "required" => "El campo :attribute es obligatorio"
        ];

        $this->validate($request,$campos,$mensaje);

        $id = $request->id;
        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/redes',$nombreFile);
        $imagen         = '/upload/redes/'.$nombreFile;

        $redes = redes::find($id);
        $form = array(
            'direccion' => $request->all()['direccion'],
            'icono' => $request->all()['nombre'],
            'nombre' => $request->all()['nombre'],
            'ruta' => $imagen,
            'fecha' => date("Y-m-d H:i:s"),
        );

        $redes->fill($form);
        $redes->save();

        return redirect('/admin/redes/')->with('ok','Archivo editado con exito!');
    }

}
