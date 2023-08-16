<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function index(){
        // $noticias = [
        //     [ 'id' => '1',
        //       'titulo' => 'Visita Pastoral',
        //       'descripcion' => ' Pastor distrital llegara de visita.' ],
        //     [ 'id' => '2',
        //       'titulo' => 'VIsita Pastor Stanley',
        //       'descripcion' => ' Visita a la U.' ]
        // ];
        // return view('noticia', ['noticias'=> $noticias]);
        $evento = Evento::find(2);
        return $evento;
        // dd($evento);
        // return view('evento',['eventos'=> $evento]);
    }
}
