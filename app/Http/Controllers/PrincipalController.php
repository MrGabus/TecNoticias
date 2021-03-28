<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        $url = "https://jsonplaceholder.typicode.com/posts";
        $json_data = file_get_contents($url);
        $app = json_decode($json_data);
        
        $page_id = 1;
        $count_p = 10;
        $count_i = 0;
        

        return view('site.principal', compact('app', 'page_id', 'count_p', 'count_i'));
    }    
}
