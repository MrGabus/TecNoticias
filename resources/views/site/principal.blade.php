@extends('site.layouts.basico')

@section('titulo', 'Home')

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

      <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n1.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n2.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n3.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n4.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n5.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n6.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n7.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n8.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n9.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('img/n10.jpg') }}" class="card-img-top" width="150" height="150">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>                                
            </div>
        </div>
        
      </div>
    </div>
  </div>

@endsection

