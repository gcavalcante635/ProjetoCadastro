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
<div class="container">
<div class="row">
    <center> <h1>Menu</h1> <center>
    </div>


    <div class="row mt-3">
            <div class="row">

            <a  href="{{ route('listaCadastros') }}" class="btn btn-primary"><h1>Lista de Usuários</h1></a>
            </div>

            <div class="row mt-2">

            <a  href="{{ route('carregarCadastro') }}" class="btn btn-primary"><h1>Novo cadastro</h1></a>
            </div>
            <div class="row mt-2">

            <a  href="{{ route('listaEndereco') }}" class="btn btn-primary"><h1>Lista de Endereço</h1></a>
            </div>

            <div class="row mt-2">

            <a  href="{{ route('novoEndereco') }}" class="btn btn-primary"><h1>Novo Endereço</h1></a>
            </div>
    
    </div>

    <div class="row">
    <center> Todos os direitos reservados - Guilherme Marinho - 2021 <center>

    </div>
</div>
</div>
</div>
</body>
</html>