<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Maquinas;

class MaquinasController extends Controller
{
    private $objM;

    public function __construct(){
        $this->objM = new Maquinas();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                                        // desc
        $dados = $this->objM->paginate();
    
        return view('lst_maquinas',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frm_maquinas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ok = $this->objM->create([
            'maquina'=>$request->maquina,
            'empresa'=>$request->empresa,
            'ativa'=>$request->ativa,
            'dados'=>$request->dados
        ]);
        if($ok){return redirect('maquinas');} 
    
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
        $edita= $this->objM->find($id);
        return view('frm_maquinas', compact('edita'));
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
        $alt=$this->objM->where(['id'=>$id])->update([
            'maquina'=>$request->maquina,
            'empresa'=>$request->empresa,
            'ativa'=>$request->ativa,
            'dados'=>$request->dados
        ]);
        if($alt){return redirect('maquinas');}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {                                          //last
        $deleta =$this->objM->where('id',$id)
        if($deleta)
        $deleta->delete();
           return redirect('/maquinas');
    }
}
