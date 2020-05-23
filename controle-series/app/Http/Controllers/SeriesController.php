<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    public  function listarseries()
    {

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

        return $html;
    }
}
