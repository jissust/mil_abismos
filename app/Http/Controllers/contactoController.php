<?php

namespace App\Http\Controllers;
use \App\contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formulario(){
        $c = contacto::all();
        $contacto = $c->all();
        return view("contacto", compact("contacto"));
    }

    public function grabar(Request $request){
            $file = $request->file("file");
            $nombreFile = $file->getClientOriginalName();
            $request->file->move('upload/contacto',$nombreFile);

        contacto::create(array(
            'imagen' => '/upload/contacto/'.$nombreFile,
            'fecha' => date("Y-m-d H:i:s"),
        ));

        return redirect("/admin/contacto/");
    }

    public function destroy($id){
        contacto::destroy($id);
        return redirect("/admin/contacto/");
    }

    public function edit($id){
        $contacto = contacto::find($id);
        return view('edit.contacto', compact("contacto"));
    }

    public function update(Request $request){
        $id = $request->id;
        $file = $request->file("file");
        $nombreFile = $file->getClientOriginalName();
        $request->file->move('upload/contacto',$nombreFile);
        $imagen         = '/upload/contacto/'.$nombreFile;

        $contacto = contacto::find($id);
        $form = array(
            'imagen' => $imagen,
            'fecha' => date("Y-m-d H:i:s"),
        );

        $contacto->fill($form);
        $contacto->save();

        return redirect('/editar/contacto/'.$id);
    }


}
