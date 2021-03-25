<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="row mt-2">
     <center> <h1>Cadastro</h1> <center>
    </div>

    <div class="row">
      <form method="POST" action="{{ route('carregarCadastro') }}">
       @csrf
        <div class="mb-3">
         <label for="primeiroValor" class="form-label"><h1>Nome Completo</h1></label>
         <input type="text" class="form-control" id="primeiroValor" name="valor1">
        </div>
        <div class="mb-3">
         <label for="segundoValor" class="form-label"><h1>Data de Nascimento</h1></label>
         <input type="date" class="form-control" id="segundoValor" name="valor2">
        </div>
        <div class="mb-3">
         <label for="terceiroValor" class="form-label"><h1>Senha</h1></label>
         <input type="password" class="form-control" id="terceiroValor" name="valor3">
        </div>
        <div class="mb-3">
         <label for="quartoValor" class="form-label"><h1>Matricula</h1></label>
         <input type="number" class="form-control" id="quartoValor" name="valor4">
        </div>
        <div class="row">

            <a  href="{{ route('cadastrado') }}" class="btn btn-primary"><h1>Salvar</h1></a>
            </div>
        </div>
       </form>
      </div>
      </div>

    <div class="row mt-2">
    <center> Todos os direitos reservados - Guilherme Marinho de Araujo Cavalcante - 2021 <center>
    </div>
    </div>
</body>
</html>