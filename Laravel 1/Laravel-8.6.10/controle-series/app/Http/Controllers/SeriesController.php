<?php

namespace App\Http\Controllers;


// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Requests\SeriesFormRequest;

class SeriesController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        // Para ver alguns dados que vieram com o $request
        // var_dump($request->query() );

        $series = Serie::query()
            ->orderBy('nome')
            ->get();

            
        $mensagem = $request->session()->get('mensagem');


        // return view(
        //     view: 'series.index',
        //     data: [
        //         'series' => $series
        //     ]);

        
        return view(
            view: 'series.index',
            data: compact('series', 'mensagem')
        );
    }


    public function create(Request $request)
    {
        return view(
            view: 'series.create'
        );
    }


    public function store(SeriesFormRequest $request)
    {
        // Forma de se validar dados dentro do Controlador
        // $validator = Validator::make($request->all(), [
        //     'nomeSerie' => 'required|min:3|max:255'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/series/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
            

        $nomeSerie = $request->get('nomeSerie');            // Pesquisa dentre todas as variáveis do Requsest a que possue tal nome

        // // Forma 1 : Instancia, usa
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();

        // Forma 2 : Usa, instancia
        $serie = Serie::create([
            'nome' => $nomeSerie
        ]);

        // // Forma 3 : Usa, instancia, com TODAS INFORMAÇÕES DEFINIDAS NO REQUEST
        // // É um caso específico, pois precisa enviar somente as informações necessárias para criar a Entidade e o nome do dado enviado precisa corresponder
        // //  com o nome da variável na Entidade (coisa que não acontece aqui) 
        // $serie = Serie::create(
        //     $request->all()
        // );


        // $request->session()->put('mensagem', "Serie ( {$serie->nome} : {$serie->id} ) criada com sucesso.");
        $request->session()->flash('mensagem', "Serie ( {$serie->nome} : {$serie->id} ) criada com sucesso.");
        
        return redirect()->route('listar_series');
    }


    public function destroy(Request $request)
    {
        Serie::destroy($request->id);       // Literalmente só isso para apagar
        
        $request->session()->flash('mensagem', "Serie excluída com sucesso.");

        return redirect()->route('listar_series');
    }



}