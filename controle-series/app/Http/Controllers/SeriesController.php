<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;
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

        $series = [
            'Greys\'s Anatomy',
            'Lost',
            'Agente of Shild'
        ];

        $html = "<ul>";

        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= "</ul>";

        return  view('series.index', [
            'series' => $series // 'series' parametro que esta no html
        ]);
    }
}
