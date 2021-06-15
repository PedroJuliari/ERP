<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objUsuario;
    public function __construct(){
        $this->objUsuario=new Usuario();
    }
    public function index()
    {
        $dados=Usuario::orderby('id','desc')->paginate();
        return view('lst_usuarios',compact('dados'));
        
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
    public function editar($id)
    {
         $dados=Usuario::orderby('id','desc')->paginate();
         $id2 =Usuario::find($id);
       //return view('lst_usuarios',['dados'=>$dados,'id2'=>$id2]);
       return view('lst_usuarios',compact('dados','id2'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //$dados=Usuario::find($id);
        //return view("lst_usuarios",compact('dados'));
     
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
    }

    //MODELO POR JS
  /*  public function updateModal(Request $request, $id)
    {
        {
            $this->validate($request,[
    
                'nome'=>'$required',
                'email'=>'$required',
                'senha'=>'$required',
                'ativo'=>'$required',
                'celular'=>'$required',
                'data_cadastro'=>'$required'
    
            ]);
            $emp = new Usuarios::find($id);
            
           $emp->name=$request->input('fnome');
           $emp->email=$request->input('femail');
           $emp->senha=$request->input('fsenha');
           $emp->ativo=$request->input('fativo');
           $emp->celular=$request->input('fcelular');
          




            return redirect('usuarios')->with('success',Data Updated);
        }
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     //metodo que chama a modal
     public function Deletar($id)
     {
          $dados=Usuario::orderby('id','desc')->paginate();
          $id3 =Usuario::find($id);
        //return view('lst_usuarios',['dados'=>$dados,'id2'=>$id2]);
        return view('lst_usuarios',compact('dados','id3'));
      
     }


    public function destroy($id)
    {
       // $del=$this->objUsuario->destroy($id);
        //return($del)?"sim":"não";
        //{
            $deleta =$this->objUsuario->where('id',$id)->first();
            if($deleta)
            $deleta->delete();
               return redirect('/usuarios');
               
           }
        }
    
