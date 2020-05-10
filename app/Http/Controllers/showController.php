<?php

namespace App\Http\Controllers;
use \App\show;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function formulario(){
        $s = show::all();
        $show = $s->all();

        return view("show", compact('show'));
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
        $request->file->move('upload/show',$nombreFile);

        show::create(array(
            'titulo' => $request['titulo'],
            'texto' => (! empty($request['texto']))?$request['texto']:"",
            'fecha' => date("Y-m-d H:i:s"),
            'ruta_imagen' => '/upload/show/'.$nombreFile,
        ));

        return redirect("/admin/show")->with('ok','Archivo agregado con exito!');
    }

    public function destroy($id){
        show::destroy($id);
        return redirect("/admin/show/")->with('ok','Archivo borrado con exito!');
    }

    public function edit($id){
        $show = show::find($id);
        return view('edit.show', compact("show"));
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
        $request->file->move('upload/show',$nombreFile);
        $imagen         = '/upload/show/'.$nombreFile;
        $show = show::find($id);

        $form = array(
            'titulo' => $request->all()['titulo'],
            'texto' => (! empty($request['texto']))?$request['texto']:"",
            'fecha' => date("Y-m-d H:i:s"),
            'ruta_imagen' => $imagen,
        );

        $show->fill($form);
        $show->save();

        return redirect('/editar/show/'.$id)->with('ok','Archivo editado con exito!');

    }
}
