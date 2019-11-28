<?php

namespace App\Http\Controllers;

use App\atletas;
use App\esportes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class atletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atletas = atletas::paginate(6);
        return view('atletas.list',['atletas' => $atletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esportes = esportes::all();
        return view('atletas.create',['esportes' => $esportes]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'nome.required' => 'É obrigatório um nome',
        );
        //vetor com as especificações de validações
        $regras = array(
            'nome' => 'required|string|max:255',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('atletas/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_atletas = new atletas();
        $obj_atletas->nome = $request['nome'];
        $obj_atletas->esportes_id = $request['esportes_id'];        
        $obj_atletas->save();
        return redirect('/atletas')->with('success', 'Atleta cadastrado com sucesso!!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atletas = atletas::find($id);
        return view('atletas.show',['atletas' => $atletas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //busco os dados do obj Atividade que o usuário deseja editar
    $esportes = esportes::all();
    $obj_atletas = atletas::find($id);
    return view('atletas.edit',['atletas' => $obj_atletas],['esportes' => $esportes]);   
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'nome.required' => 'É obrigatório um nome',
        );
        //vetor com as especificações de validações
        $regras = array(
            'nome' => 'required|string|max:255',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('/atletas/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_atletas = atletas::findOrFail($id);
        $obj_atletas->nome =       $request['nome'];
        $obj_atletas->esportes_id =       $request['esportes_id'];
        $obj_atletas->save();
        return redirect('/atletas')->with('success', 'Atleta alterado com sucesso!!');
    }

    public function delete($id)
    {
        $obj_atletas = atletas::find($id);
        return view('atletas.delete',['atletas' => $obj_atletas]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_atletas = atletas::findOrFail($id);
        $obj_atletas->delete($id);
        return redirect('/atletas')->with('sucess','Atleta excluído com Sucesso!!');
    }
}
