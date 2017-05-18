<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Noticia;

class NoticiaController extends Controller
{
    public function index(Request $request)
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->simplePaginate(1);

        return view('noticias', [
            'noticias' => $noticias
        ]);
    }

    public function single(Request $request, Noticia $noticia)
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->get();
        $noticia = Noticia::find($request->id);

        return view('noticia', [
            'noticia' => $noticia,
            'noticias' => $noticias
        ]);
    }

    public function painel(Request $request)
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->get();

        return view('painel', [
            'noticias' => $noticias
        ]);
    }

    public function delete(Request $request)
    {
    	Noticia::find($request->id)->delete();

    	return redirect('/painel');
    }

    public function insert(Request $request)
    {
        $noticia = new Noticia;

        $noticia->titulo = $request->titulo;
        $noticia->texto = $request->texto;
        if ($request->hasFile('imagem')) {
        	$imagem = $request->file('imagem');
        	$imagem->move('img', $imagem->getClientOriginalName());
        	$noticia->imagem = $imagem->getClientOriginalName();
        }

        $noticia->save();

        return redirect('/painel');
    }
}
