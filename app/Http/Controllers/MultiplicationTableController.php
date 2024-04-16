<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationTableController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function generateTable(Request $request)
    {
        $sizes = $request->input('size', 1); 
        $table =[] ;

        for ($i = 1; $i <= 10; $i++) {            
                $table[$i]= $i * $sizes;
        }
        $square = $sizes*$sizes;
        $cube = $sizes*$sizes*$sizes;
        return view('index', compact('table', 'sizes', 'square','cube'));        
    }
}
