<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaSCript;

class InicioController extends Controller
{
    public function mostrarHome(){
        $h = \App\home::all();
        $home = $h->all();
        return $home[0];
    }
    public function index(){
        $h = \App\home::all();
        $home = $h->all();
        $e = \App\escuchanos::all();
        $escuchanos = $e->all();
        $r = \App\redes::all();
        $redes = $r->all();
        $s = \App\show::all();
        $show = $s->all();
        $d = \App\discografia::all();
        $discografia = $d->all();
        $g = \App\galeria::all();
        $galeria = $g->all();
        $c = \App\contacto::all();
        $contacto = $c->all();
        $v = \App\video::all();
        $videos = $v->all();
        $f = \App\fondos::all();
        $fondos = $f->all();

        JavaScript::put([
            'home' => $home,
        ]);
        return view("comienzo");
        //return view("comienzo", compact('home','escuchanos','redes','show','discografia','galeria','contacto','videos','fondos'));

    }
}
