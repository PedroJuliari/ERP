<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    private $objCat;

    public function __construct(){
        $this->objCat=new Categoria();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados =$this->objCat->all();
        return view('lst_categoria', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frm_categoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ok= $this->objCat->create([
            'categoria'=>$request->categoria,
            'ativo_categoria'=>$request->ativo_categoria
            
        ]);
        if($ok){
            return redirect('categoria');
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
        $edita =$this->objCat->find($id);
        return view('frm_categoria', compact('edita'));
    }

    public function modal($id){

        $modal=$this->objCat->orderby('id','desc')->paginate();
        return view('lst_categoria', compact('modal','id'));

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
        $this->objCat->where(['id'=>$id])->update([

            'categoria'=>$request->categoria,
            'ativo_categoria'=>$request->ativo_categoria
             ]);
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleta =$this->objCat->where('id',$id);
        if($deleta)
        $deleta->delete();
           return redirect('/categoria');
    }
}
