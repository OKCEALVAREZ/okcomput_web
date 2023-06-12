<?php

namespace App\Http\Controllers\Evento;

use App\Http\Controllers\Controller;
use App\Models\DellEvento;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventoController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('evento.formulario', get_defined_vars());
    }

    public function guardar(Request $request)
    {
        try {
            $data = DellEvento::firstOrNew(['id' => $request->id]);
                $data->nombres = Str::upper($request->nombres);
                $data->correo = $request->correo;
                $data->telefono = $request->telefono;
                $data->cargo = Str::upper($request->cargo);
                $data->empresa = Str::upper($request->empresa);
                $data->modalidad = $request->modo;
                $data->flag_portatil = ($request->comp_portatil == 'on') ? true : false;
                $data->flag_escritorio = ($request->comp_escritorio == 'on') ? true : false;
                $data->flag_estacion = ($request->est_trabajo == 'on') ? true : false;
                $data->flag_servidor = ($request->servidor == 'on') ? true : false;
                $data->organizacion = $request->organizacion;
                $data->informacion = $request->informacion;
            $data->save();

            $response = 'ok';
            $alert = 'success';
            $message = 'Formulario registrado con éxito';
            $error = '';
        } catch (Exception $ex) {
            $response = 'error';
            $alert = 'danger';
            $message ='Hubo un problema en el servidor. Por favor intente de nuevo';
            $error = $ex;
        }
        return response()->json(array('response' => $response, 'alert' => $alert, 'message' => $message, 'error' => $error), 200);
    }
}
