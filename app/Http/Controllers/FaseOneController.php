<?php

namespace App\Http\Controllers;

use App\DadosFaseOne;
use App\DadosFaseTwo;
use App\DadosFaseTree;
use App\Resultado;
use Illuminate\Support\Facades\DB;

class FaseOneController extends Controller
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
        $dados_fase = DadosFaseOne::all();

        if($dados_fase){
            return response()->json($dados_fase);
        }else{
            return response()->json(['data'=>'Error return Dados fase','status'=>false]);
        }
    }

    public function indexFase2()
    {
        $dados_fase = DadosFaseTwo::all();

        if($dados_fase){
            return response()->json($dados_fase);
        }else{
            return response()->json(['data'=>'Error return dados fase','status'=>false]);
        }
    }

    public function indexFase3()
    {
        $dados_fase = DadosFaseTree::all();

        if($dados_fase){
            return response()->json($dados_fase);
        }else{
            return response()->json(['data'=>'Error return dados fase','status'=>false]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $fase = DadosFaseOne::create($dados);

        if($fase){
            return response()->json($fase);
        }else{
            return response()->json(['data'=>'Error insert Dados fase','status'=>false]);
        }
    }

    public function storeFase2(Request $request)
    {
        $dados_fase2 = $request->all();
        $fase2 = DadosFaseTwo::create($dados_fase2);

        if($fase2){
            return response()->json($fase2);
        }else{
            return response()->json(['data'=>'Error insert dados fase','status'=>false]);
        }
    }


    public function storeFase3(Request $request)
    {
        $dados_fase3 = $request->all();
        $fase3 = DadosFaseTree::create($dados_fase3);

        if($fase3){
            return response()->json($fase3);
        }else{
            return response()->json(['data'=>'Error insert dados fase','status'=>false]);
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

    //retorna resultado de partidas fase 1
    public function getResultsOne(){

        $resultados  = DB::table('resultados')
            ->join('dados_fase_ones','resultados.id','=','dados_fase_ones.fk_resultado')
        ->select('resultados.*','dados_fase_ones.img_sel1','dados_fase_ones.img_sel2',
            'dados_fase_ones.img_sel3','dados_fase_ones.img_sel4','dados_fase_ones.nome_sel1',
            'dados_fase_ones.nome_sel2','dados_fase_ones.nome_sel3','dados_fase_ones.nome_sel4')
            ->whereBetween('dados_fase_ones.fk_resultado', array(1, 8))
        ->get();

        if(!empty($resultados)){
            return response()->json($resultados);
        }else{
            return response()->json(['data'=>'Error return results','status'=>false]);
        }

    }

    public function getResultsTwo(){

        $resultados  = DB::table('resultados')
            ->join('dados_fase_twos','resultados.id','=','dados_fase_twos.fk_resultado')
            ->select('resultados.*','dados_fase_twos.img_sel1','dados_fase_twos.img_sel2',
                'dados_fase_twos.img_sel3','dados_fase_twos.img_sel4','dados_fase_twos.nome_sel1',
                'dados_fase_twos.nome_sel2','dados_fase_twos.nome_sel3','dados_fase_twos.nome_sel4')
            ->whereBetween('dados_fase_twos.fk_resultado', array(9, 16))
            ->get();

        if(!empty($resultados)){
            return response()->json($resultados);
        }else{
            return response()->json(['data'=>'Error return results','status'=>false]);
        }

    }

    public function getResultsTree(){

        $resultados  = DB::table('resultados')
            ->join('dados_fase_trees','resultados.id','=','dados_fase_trees.fk_resultado')
            ->select('resultados.*','dados_fase_trees.img_sel1','dados_fase_trees.img_sel2',
                'dados_fase_trees.img_sel3','dados_fase_trees.img_sel4','dados_fase_trees.nome_sel1',
                'dados_fase_trees.nome_sel2','dados_fase_trees.nome_sel3','dados_fase_trees.nome_sel4')
            ->whereBetween('dados_fase_trees.fk_resultado', array(17, 24))
            ->get();

        if(!empty($resultados)){
            return response()->json($resultados);
        }else{
            return response()->json(['data'=>'Error return results','status'=>false]);
        }

    }
}
