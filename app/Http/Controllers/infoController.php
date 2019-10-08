<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $informacion = [
            'curso' => 'Basics Laravel',
            'modalidad' => 'Internet',
            'precio' => 'Gratuito'
        ];

        return view('info', compact('informacion'));
    }
}
