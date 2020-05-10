<?php

namespace App\Http\Controllers;

use \App\video;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function formulario(){
        $v = video::all();
        $videos = $v->all();
        return view("videos", compact("videos"));
    }

    public function grabar(Request $request){
        $file = $request->file("file");
        if($file != null ){
            $nombreFile = $file->getClientOriginalName();
            $request->file->move('upload/videos',$nombreFile);
            $ruta = "/upload/videos/".$nombreFile;
        }else{
            $ruta = $request["ruta"];
        }

        video::create(array(
            'ruta' => $ruta,
            'fecha' => date("Y-m-d H:i:s"),
        ));

        return redirect("/admin/videos/");
    }

    public function destroy($id){
        video::destroy($id);
        return redirect("/admin/videos/");
    }
}
