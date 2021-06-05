<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenServico;

class OrdenServicoController extends Controller
{
    private $objOrdenServico;

    public function __construct(){

       $this->objOrdenServico=new OrdenServico();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $dados = $this->objOrdenServico->all();
        return view('ListaOrdenProducao',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('OrdenProducao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ok= $this->objOrdenServico->create([
            'processo_produtivo'=>$request->processo_produtivo,
            'observacao'=>$request->observacao
        ]);
        if($ok){
            return redirect('OrServicos');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edita =$this->objOrdenServico->find($id);
        return view('OrdenProducao', compact('edita'));
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
        $this->objOrdenServico->where(['id'=>$id])->update([

            'processo_produtivo'=>$request->processo_produtivo,
            'observacao'=>$request->observacao

        ]);
        return redirect('/OrServicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleta =$this->objOrdenServico->where('id',$id)->first();
        if($deleta)
        $deleta->delete();
           return redirect('/OrServicos');
    }
}
