<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()   
    {
        $jogos = Jogo::all();


        return view('jogos.index', ["jogos" => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        Jogo::create($request->all());
        return redirect('/');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id',$id)->first();

        if(!empty($jogos))
        {
            //dd($jogos);
            return view('jogos.edit', ['jogos' => $jogos]);           
        }
        else 
        {
            return redirect('/');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];

        Jogo::where('id',$id)->update($data);
        return redirect('/');
    }

    public function delete($id)
    {
        Jogo::Where('id',$id)->delete();
        return redirect('/');
    }
    
}
 