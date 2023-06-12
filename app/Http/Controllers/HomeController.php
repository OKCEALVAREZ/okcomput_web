<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CatalogWeb;
use App\Models\EventoAqp;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function inicio()
    {
        $ruta_ban = 'https://cms.okccloud.com/web/banners/';
        $banner = Gallery::where('art_type_id', 3)->where('section_id', 1)->get();
		$mic_hor = Gallery::where('art_type_id', 3)->where('section_id', 10)->latest()->first();
        $mic_ver = Gallery::where('art_type_id', 3)->where('section_id', 11)->latest()->first();
        $temp_page = 'home-index';
        return view('inicio', get_defined_vars());
    }

    public function office365()
    {
        $temp_page = 'home-index-2';
        return view('microsoft-office-365', get_defined_vars());
    }

    public function office2021()
    {
        $temp_page = 'home-index-2';
        return view('microsoft-office-2021', get_defined_vars());
    }

    public function microsoft()
    {
        $temp_page = 'home-index-2';
        return view('microsoft', get_defined_vars());
    }

    public function windows()
    {
        $temp_page = 'home-index-2';
        return view('microsoft-windows', get_defined_vars());
    }

    public function commercialOffice()
    {
        $temp_page = 'home-index-2';
        return view('commercial-office', get_defined_vars());
    }

    public function novedades()
    {
        $temp_page = 'home-index-2';
        return view('novedades', get_defined_vars());
    }

    public function catalogo()
    {
        $catweb = CatalogWeb::where('type', 'okc')->get();
        $catliq = CatalogWeb::where('type', 'ext')->get();
        $temp_page = 'home-index-2';
        return view('catalogo', get_defined_vars());
    }

    public function contacto()
    {
        $temp_page = 'product-page';
        return view('contacto', get_defined_vars());
    }
    public function registroAQP()
    {
        $numero_1 = rand(1,10);
        $numero_2 = rand(1,10);
        $suma = $numero_1 + $numero_2;
        return view('evento.registroaqp', get_defined_vars());
    }
    public function guardarRegistroAQP(Request $request)
    {
        // $key_secret = '6Ldi_kAlAAAAAGaMRdF-Etc7X2ux49HGHinF6Kd3';
        // $respuesta = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$key_secret.'&response='.$request['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
        // $atributos = json_decode($respuesta);
        $mensaje = 'Se registro con éxito';
        $success = false;
        if ($request->total !== $request->suma) {
            $mensaje = 'El ingreso de la suma es incorrecta';
            $success = true;
        }
        $buscar_email = EventoAqp::where('email',$request->correo)->first();
        $email_validate=false;
        if ($buscar_email) {
            $mensaje = 'El correo electronico esta en uso';
            $success = true;
            $email_validate = true;
        }
        if ($success===false) {
            $eventoAqp                  = new EventoAqp();
            $eventoAqp->nombres         = $request->nombres;
            $eventoAqp->email           = $request->correo;
            $eventoAqp->celular         = $request->celular;
            $eventoAqp->lugar_trabajo   = $request->lugar_trabajo;
            $eventoAqp->cargo           = $request->cargo;
            $eventoAqp->programa        = $request->programa;
            $eventoAqp->office          = $request->office;
            $eventoAqp->windows         = $request->windows;
            $eventoAqp->save();
        }

        return response()->json(["mensaje"=>$mensaje,"success"=>$success,"validate_email"=>$email_validate],200);exit;
    }
}