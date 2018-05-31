<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{

    public function __construct()
    {
        header("Acess-Control-Allow-Origin:*");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = DB::table('noticias')
            ->orderByRaw('url_img - titulo_noticia - conteudo_noticia DESC')
            ->get();

        if ($noticias){
            return response()->json($noticias);

        }else{
            return response()->json(['data'=>'Erro ao recuperar  notícias','status'=>false]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dadosNoticia = $request->all();
        $noticia = Noticia::create($dadosNoticia);

        if ($noticia){
            return response()->json($noticia);

        }else{
            return response()->json(['data'=>'Error create noticia','status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
