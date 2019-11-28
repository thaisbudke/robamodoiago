<?php

namespace App\Http\Controllers;

use App\eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class eventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = eventos::paginate(6);
        return view('eventos.list',['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
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
            'titulo.required' => 'É obrigatório um título',
            'local.required' => 'É obrigatória um local',
            'data.required' => 'É obrigatório o cadastro da data/hora',
        );
        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'local' => 'required|string',
            'data' => 'required|string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('eventos/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_eventos = new eventos();
        $obj_eventos->titulo =       $request['titulo'];
        $obj_eventos->local = $request['local'];
        $obj_eventos->data = $request['data'];
        $obj_eventos->save();
        return redirect('/eventos')->with('success', 'Evento criado com sucesso!!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventos = eventos::where("id",$id)->with('esportes')->get()->first();
        return view('eventos.show',['eventos' => $eventos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //busco os dados do obj Atividade que o usuário deseja editar
        $obj_eventos = eventos::find($id);
        return view('eventos.edit',['eventos' => $obj_eventos]);     
    }
               

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'titulo.required' => 'É obrigatório um título',
            'local.required' => 'É obrigatória uma descrição',
            'data.required' => 'É obrigatório o cadastro da data/hora',
        );
        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'local' => 'required',
            'data' => 'required|string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('/eventos/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_eventos = eventos::findOrFail($id);
        $obj_eventos->titulo =       $request['titulo'];
        $obj_eventos->local = $request['local'];
        $obj_eventos->data = $request['data'];
        $obj_eventos->save();
        return redirect('/eventos')->with('success', 'Evento alterada com sucesso!!');
    }

    public function delete($id)
    {
        $obj_eventos = eventos::find($id);
        return view('eventos.delete',['eventos' => $obj_eventos]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_eventos = eventos::findOrFail($id);
        $obj_eventos->delete($id);
        return redirect('/eventos')->with('sucess','Evento excluído com Sucesso!!');
    }

}
