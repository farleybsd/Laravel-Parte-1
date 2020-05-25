<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;
use App\Serie;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\PHP;

class SeriesController extends Controller
{
    public  function index(Request $request)
    {
        //echo $request->url() . PHP_EOL;
        //echo $request->query('parametro'); //http://127.0.0.1:8000/series?parametro=valor
        //var_dump($request->query()); //http://127.0.0.1:8000/series?parametro=valor?nome=%27Farley%27?idade=28 traz todos parametros como array
        //exit();

        // $series = [
        //     'Greys\'s Anatomy',
        //     'Lost',
        //     'Agente of Shild'
        // ];

        // $html = "<ul>";

        // foreach ($series as $serie) {
        //     $html .= "<li>$serie</li>";
        // }

        // $html .= "</ul>";

        //$series = Serie::all();
        $series = Serie::query()->orderBy('nome')->get();
        return  view('series.index', [
            'series' => $series // 'series' parametro que esta no html
        ]);
    }

    public function create()
    {
        return view('series.create');
    }



    public function store(Request $request)
    {

        //$nome = $request->nome;
        // $serie = new Serie();
        // $serie->nome = $nome;
        // var_dump($serie->save());

        //    $serie = Serie::create($request->all());

        $nome = $request->nome;
        $serie = Serie::create([
            'nome' => $nome
        ]);

        //echo "Série com id ($serie->id) criada: ($serie->nome)";
        return redirect('/series');
    }
}
