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

    public function principalNoticia(int $page_id){
        $url = "https://jsonplaceholder.typicode.com/posts";
        $json_data = file_get_contents($url);
        $app = json_decode($json_data);
        
        switch ($page_id) {
            case '1':
                $count_p = 10;
                $count_i = 0;
                break;
            case '2':
                $count_p = 20;
                $count_i = 10;
                break;
            case '3':
                $count_p = 30;
                $count_i = 20;
                break;          
            case '4':
                $count_p = 40;
                $count_i = 30;
                break; 
            case '5':
                $count_p = 50;
                $count_i = 40;
                break;
            case '6':
                $count_p = 60;
                $count_i = 50;
                break;
            case '7':
                $count_p = 70;
                $count_i = 60;
                break;
            case '8':
                $count_p = 80;
                $count_i = 70;
                break;          
            case '9':
                $count_p = 90;
                $count_i = 80;
                break; 
            case '10':
                $count_p = 100;
                $count_i = 90;
                break;          
            default:
                $count_p = 10;
                $count_i = 0;
                break;
        }

        return view('site.principal', compact('app', 'page_id', 'count_p', 'count_i'));
    }

    
}
