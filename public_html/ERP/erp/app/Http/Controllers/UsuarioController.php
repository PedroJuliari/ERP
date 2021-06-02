<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

private $objUsuario;

public function __construct(){
    $this->objUsuario=new Usuario();
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = $this->objUsuario->all();
        return view('lst_usuario',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $lista = $this->objUsuario->all();
        return view('Cadastro_Usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ok= $this->objUsuario->create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'senha'=>$request->senha,
            'ativo'=>$request->ativo,
            'celular'=>$request->celular,
            'data_cadastro'=>$request->data_cadastro
        ]);
        if($ok){
            return redirect('usuarios');
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
        $edita =$this->objUsuario->find($id);
        return view('Cadastro_Usuario', compact('edita'));
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
        $this->objUsuario->where(['id'=>$id])->update([

            'nome'=>$request->nome,
            'email'=>$request->email,
            'senha'=>$request->senha,
            'ativo'=>$request->ativo,
            'celular'=>$request->celular,
            'data_cadastro'=>$request->data_cadastro

        ]);
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objUsuario->destroy($id);
        return($del)?"sim":"nao";
    }
}
