<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\DadosSelecoes;
use Illuminate\Support\Facades\DB;


class GrupoController extends Controller
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

        //$grupos = Grupo::all();

        $dados = DB::table('grupos')
            ->join('dados_selecoes', 'grupos.id', '=', 'dados_selecoes.fk_grupo')
            ->select('grupos.*', 'dados_selecoes.*')
            ->get();

        return response()->json($dados);

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
        $dados = $request->all();
        $grupo = Grupo::create($dados);

        if ($grupo){
            return response()->json($grupo);
        }else{
            return response()->json(['data'=>'Erro ao inserir grupo','status'=>false]);
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
        $grupo = Grupo::find($id);

        if(!empty($grupo))
        {
         return response()->json($grupo);
        }else{
            return response()->json(['data'=>'Error','status'=>false]);

        }
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
