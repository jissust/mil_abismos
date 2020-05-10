<?php

namespace App\Http\Controllers;

use \App\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect("/admin/formulario/");
    }

    public function formulario(){
        $h = home::all();
        $home = $h->all();

        return view("inicio", compact("home"));
    }

    public function grabar(Request $request){
      $campos = [
            'file' => 'required',
        ];

        $mensaje = ["Este archivo es obligatorio"];

        $this->validate($request,$campos,$mensaje);

        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/home',$nombreFile);

         home::create(array(
            'ruta' => '/upload/home/'.$nombreFile,
            'visualizar' => 1,
            'fecha' => date("Y-m-d H:i:s"),
        ));

         return redirect("/admin/formulario/")->with('ok','Archivos grabados con exito!');
    }

    public function destroy($id){
        home::destroy($id);
        return redirect("/admin/formulario")->with('ok','Archivos borrados con exito!');
    }

    public function edit($id){
        $home = home::find($id);
        return view('edit.formulario',compact("home"));
    }

    public function update(Request $request){

        $campos = [
            'file' => 'required',
        ];

        $mensaje = ["Este archivo es obligatorio"];

        $this->validate($request,$campos,$mensaje);

        $id             = $request->id;
        $file           = $request->file("file");
        $nombreFile     = $file->getClientOriginalName();
        $request->file->move('upload/home',$nombreFile);
        $imagen         = '/upload/home/'.$nombreFile;

        $home = home::find($id);
        $form = array(
            'ruta' => $imagen,
            'visualizar' => 1,
            'fecha' => date("Y-m-d H:i:s"),
        );

        $home->fill($form);
        $home->save();

        return redirect("/admin/formulario/")->with('ok','Archivo grabado con exito!');
    }
}
