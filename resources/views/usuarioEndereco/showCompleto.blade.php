<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <style>
    <body>
    {
        font-family: 'Blinker', sans-serif;
    }
    </style>

</head>
<body>
   <div class="row">
   <h1> Cadastro efetuado com sucesso! </h1>
   </div>

   <div class="row mt-3">
   <div class="col-md-2">Nome completo</div>
   <div class="col-md-2">{{ $usuario->nome}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Data de Nascimento</div>
   <div class="col-md-2">{{ $usuario->data_nascimento}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Senha</div>
   <div class="col-md-2">{{ $usuario->senha}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Matricula</div>
   <div class="col-md-2">{{ $usuario->matricula}}</div>
   </div>

   <div class="row mt-3">
   <div class="col-md-2">CEP</div>
   <div class="col-md-2">{{ $endereco->cep}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Logradouro</div>
   <div class="col-md-2">{{ $endereco->logradouro}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Número</div>
   <div class="col-md-2">{{ $endereco->numero}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Complemento</div>
   <div class="col-md-2">{{ $endereco->complemento}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Bairro</div>
   <div class="col-md-2">{{ $endereco->bairro}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Cidade</div>
   <div class="col-md-2">{{ $endereco->cidade}}</div>
   </div>

   <div class="row mt-2">
   <div class="col-md-2">Estado</div>
   <div class="col-md-2">{{ $endereco->estado}}</div>
   </div>
 
</body>
</html>