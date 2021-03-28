<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function noticia(int $p1){ 
        $url = "https://jsonplaceholder.typicode.com/posts";
        $json_data = file_get_contents($url);
        $app = json_decode($json_data);
                

        return view('site.noticia', compact('app', 'p1'));
    }
}
