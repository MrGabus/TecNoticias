<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>TecNoticias - @yield('titulo')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>       
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
                

    </head>

    <body>
        <main>
            @include('site.layouts._partials.topo')
            @yield('conteudo')
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        </main>
        
        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{ asset('img/facebook.png') }}">
                <img src="{{ asset('img/linkedin.png') }}">
                <img src="{{ asset('img/youtube.png') }}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@tecnoticias.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{ asset('img/mapa.png') }}">
            </div>
        </div>
    </body>
</html>