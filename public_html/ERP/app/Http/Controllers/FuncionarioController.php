<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    private $objF;

    public function __construct(){
         $this->objF =new Funcionario();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = $this->objF->paginate();
        return view('lst_funcionario',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frm_funcionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ok= $this->objF->create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'cargo'=>$request->cargo,
            'celular'=>$request->celular,
            'data_registro'=>$request->data_registro,
            'cpf'=>$request->cpf,
            'endereco'=>$request->endereco,
            'numero'=>$request->numero,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'fone'=>$request->fone
        ]);
        if($ok){
            return redirect('funcionario');
        }
    }
    public function search(Request $request)
    {
        $dadosP =$request->all();
       $dados = $this->objF->where('nome','LIKE',"%{$request->buscar}%")
           ->orWhere('cpf','LIKE',"%{$request->buscar}%")
           ->paginate(15);

           return view('lst_funcionario',compact('dados','dadosP'));
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
        $edita =$this->objF->find($id);
        return view('frm_funcionario', compact('edita'));
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
        $this->objF->where(['id'=>$id])->update([

            'nome'=>$request->nome,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'cargo'=>$request->cargo,
            'celular'=>$request->celular,
            'data_registro'=>$request->data_registro,
            'cpf'=>$request->cpf,
            'endereco'=>$request->endereco,
            'numero'=>$request->numero,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'fone'=>$request->fone
        ]);
        return redirect('funcionario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleta =$this->objF->where('id',$id)->first();
        if($deleta)
        $deleta->delete();
           return redirect('/funcionario');
    }
}
