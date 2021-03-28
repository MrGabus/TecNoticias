
@extends('site.layouts.basico')

@isset($app, $p1) 

@section('titulo', $app[$p1]->title)

@php
    if ($p1 >= 0 )
     $count = $p1 + 5   
@endphp

@section('conteudo')

    <div>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-12 col-md-8 mx-auto"
                style="background: url('{{ asset('img/main.png') }}') no-repeat center">
                <h3 class="fw-light text-white">{{$app[$p1]->title}}</h1>                                     
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="row">
              <div class="col align-self-center">
                <h2>{{$app[$p1]->body}}</h2>
              </div>
            </div>
        </div>
        
          
    </div>
    
    <div class="album py-5 bg-light">
        <div class="container">
    
          <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">               
            
            @for ($i = $p1+1; $i < $count; $i++)
    
                <div class="col">
                    <div class="card" style="width: 15rem;">                
                        <img src="https://picsum.photos/200" class="card-img-top" width="150" height="150">
                        <h5 class="card-title truncate">{{ $app[$i]->title }}</h5>
                        <div class="card-body content">
                            <p class="card-text truncate">{{ $app[$i]->body }}</p>
                        </div>                    
                        <a href="{{ route('site.noticia', $p1=$i) }}" class="btn btn-link">Leia mais...</a>
                    </div>
                </div>       
            
            @endfor         
            
        </div>
    </div>

@endsection

@endisset