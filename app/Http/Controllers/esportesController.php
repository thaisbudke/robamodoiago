<?php

namespace App\Http\Controllers;

use App\esportes;
use App\atletas;
use App\eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class esportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $esportes = esportes::paginate(6);
        return view('esportes.list',['esportes' => $esportes]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = eventos::all();
        return view('esportes.create',['eventos' => $eventos]);
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
            'descricao.required' => 'É obrigatória um descricao',
            'data.required' => 'É obrigatório o cadastro da data/hora',
            'genero.required' => 'É obrigatório o cadastro da genero',
            'resultado.required' => 'É obrigatório o cadastro da resultado',
            'evento_id.required' => 'É obrigatório o cadastro do Evento Relacionado',

        );
        //vetor com as especificações de validações
        $regras = array(
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data' => 'required|string',
            'genero' => 'required|string',
            'resultado' => 'required|string',
            'evento_id' => 'required|integer',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('esportes/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_esportes = new esportes();
        $obj_esportes->nome =       $request['nome'];
        $obj_esportes->descricao = $request['descricao'];
        $obj_esportes->data = $request['data'];
        $obj_esportes->genero = $request['genero'];
        $obj_esportes->resultado = $request['resultado'];
        $obj_esportes->evento_id = $request['evento_id'];        
        $obj_esportes->save();
        return redirect('/esportes')->with('success', 'Esporte criado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\esportes  $esportes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $esportes = esportes::where('id',$id)->with('atletas')->get()->first();
        return view('esportes.show',['esportes' => $esportes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\esportes  $esportes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $eventos = eventos::all();
    $obj_esportes = esportes::find($id);
    return view('esportes.edit',['esportes' => $obj_esportes],['eventos' => $eventos]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\esportes  $esportes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'nome.required' => 'É obrigatório um nome',
            'descricao.required' => 'É obrigatória um descricao',
            'data.required' => 'É obrigatório o cadastro da data/hora',
            'genero.required' => 'É obrigatório o cadastro da genero',
            'resultado.required' => 'É obrigatório o cadastro da resultado',
            'evento_id.required' => 'É obrigatório o cadastro da resultado',

        );
        //vetor com as especificações de validações
        $regras = array(
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data' => 'required|string',
            'genero' => 'required|string',
            'resultado' => 'required|string',
            'evento_id' => 'required',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('/esportes')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_esportes = esportes::findOrFail($id);
        $obj_esportes->nome = $request['nome'];
        $obj_esportes->descricao = $request['descricao'];
        $obj_esportes->data = $request['data'];
        $obj_esportes->genero = $request['genero'];
        $obj_esportes->resultado = $request['resultado'];
        $obj_esportes->evento_id = $request['evento_id'];        
        $obj_esportes->save();
        return redirect('/esportes')->with('success', 'Esportes editado com sucesso!!');
    }

    public function delete($id)
    {
        $obj_esportes = esportes::find($id);
        return view('esportes.delete',['esportes' => $obj_esportes]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\esportes  $esportes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_esportes = esportes::findOrFail($id);
        $obj_esportes->delete($id);
        return redirect('/esportes')->with('sucess','Esporte excluído com Sucesso!!');
    }
}
