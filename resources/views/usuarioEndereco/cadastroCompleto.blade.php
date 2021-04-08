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
      <form method="POST" action="{{ route('saveUsuario') }}">
       @csrf
        <div class="mb-3">
         <label for="nomecompleto" class="form-label"><h1>Nome Completo</h1></label>
         <input type="text" class="form-control" id="nomecompleto" name="nome">
        </div>
        <div class="mb-3">
         <label for="datadenascimento" class="form-label"><h1>Data de Nascimento</h1></label>
         <input type="date" class="form-control" id="datadenascimento" name="data_nascimento">
        </div>
        <div class="mb-3">
         <label for="senha" class="form-label"><h1>Senha</h1></label>
         <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="mb-3">
         <label for="matricula" class="form-label"><h1>Matricula</h1></label>
         <input type="number" class="form-control" id="matricula" name="matricula">
        </div>
      
        <div class="row mt-2">
     <center> <h1>Novo Endereço</h1> <center>
    </div>

    <div class="row">
        <div class="mb-3">
         <label for="cep" class="form-label"><h1>CEP</h1></label>
         <input type="text" class="form-control" id="cep" name="cep">
        </div>
        <div class="mb-3">
         <label for="logradouro" class="form-label"><h1>Logradouro</h1></label>
         <input type="text" class="form-control" id="logradouro" name="logradouro">
        </div>
        <div class="mb-3">
         <label for="numero" class="form-label"><h1>Número</h1></label>
         <input type="text" class="form-control" id="numero" name="numero">
        </div>
        <div class="mb-3">
         <label for="complemento" class="form-label"><h1>Complemento</h1></label>
         <input type="text" class="form-control" id="complemento" name="complemento">
        </div>
        <div class="mb-3">
         <label for="bairro" class="form-label"><h1>Bairro</h1></label>
         <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="mb-3">
         <label for="cidade" class="form-label"><h1>Cidade</h1></label>
         <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
        <div class="mb-3">
         <label for="estado" class="form-label"><h1>Estado</h1></label>
         <input type="text" class="form-control" id="estado" name="estado">
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
       
      </form>
      </div>

    <div class="row mt-2">
    <center> Todos os direitos reservados - Guilherme Marinho de Araujo Cavalcante - 2021 <center>
    </div>
</div>
</body>
</html>