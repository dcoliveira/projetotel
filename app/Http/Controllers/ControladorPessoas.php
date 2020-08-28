<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

use App\pessoas;
use Illuminate\Support\Facades\Auth;

class ControladorPessoas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index()
    {
        
        if('/')  
            return view('/index');
        elseif('/pessoas')
            return view('/pessoas/lista');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastropessoas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pessoa = new Pessoas();
        $pessoa->nome = $request->input('nomePessoa');
        $pessoa->cpf = $request->input('cpfPessoa');
        $pessoa->rg = $request->input('rgPessoa');
        $pessoa->data_nascimento = $request->input('dataNascimento');
        $pessoa->telefone = $request->input('telPessoa');
        $pessoa->uf_nascimento = $request->input('ufNascimento');
        $pessoa->id_usuariocadastrou = Auth::user()->id;
        $pessoa->id_usuariomodificou = Auth::user()->id;
        $pessoa->save(); 
        return redirect('/pessoas/lista'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pessoas = Pessoas::all();
        return view('pessoas', compact('pessoas')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $pessoas = Pessoas::find($id);
        if(isset($pessoas)){
            return view('editapessoas', compact('pessoas'));
        }
        //return redirect('/pessoas/lista');
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
        $pessoas = Pessoas::find($id);
        if ($pessoas) {
            $pessoas->nome = $request->input('nomePessoa');
            $pessoas->cpf = $request->input('cpfPessoa');
            $pessoas->rg = $request->input('rgPessoa');
            $pessoas->data_nascimento = $request->input('dataNascimento');
            $pessoas->telefone = $request->input('telPessoa');
            $pessoas->uf_nascimento = $request->input('ufNascimento');
            $pessoas->id_usuariomodificou = Auth::user()->id;
            $pessoas->save(); 
            return redirect('/pessoas/lista');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pessoas = Pessoas::find($id);
       if(isset($pessoas)){
           $pessoas->delete();

       }
       return redirect('/pessoas/lista');
    }
}
