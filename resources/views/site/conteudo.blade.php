@extends('site.layouts.basico')

@section('titulo', 'Home')

@isset($app, $page_id, $count_p, $count_i)

@section('conteudo')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-12 col-md-8 mx-auto"
        style="background: transparent url('{{ asset('img/main.png') }}') no-repeat center">
            <h1 class="fw-light text-white ">TecNoticias</h1>
            <p class="lead text-white ">Tudo sobre nóticias de tecnologia.</p>                  
        </div>
    </div>
</section>    


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">            
        
        @for ($i = $count_i; $i < $count=$count_p; $i++)

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

<div class="container">    
    <div class="row py-5 justify-content-center">        
        @if ($page_id > 0)                
            <a href="{{ route('site.principal') }}" type="button" class="col-4 btn btn-outline-primary">Voltar</a>               
        @endif            
        
        @if ($page_id < 10)       
        <a href="{{ route('site.conteudo', $page_id=$page_id+1) }}" type="button" class="col-4 btn btn-outline-primary">Proximo</a>
        @endif

    </div>
</div>

  
@endsection


@endisset
