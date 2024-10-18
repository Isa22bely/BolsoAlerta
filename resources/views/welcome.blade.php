<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>entrar</title>
    @vite(['resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="fundo">
    <div class="mx-auto p-2" style="width: 70%;">
    <img class="rounded mx-auto d-block" src="{{asset('storage/exemplo/logoCB.svg')}}">
    <div class="text-center">
        <h3 class="fw-medium"> CORPO DE BOMBEIROS MILITAR DE MINAS GERAIS </h3>
    </div>
  
    <div class="card">
        <div class="card-body">
            <form>
                <div class="mx-auto p-2" style="width: 280px;">
                     <h5 class="fw-bold" class="text-break">REALIZAR LOGIN NO SISTEMA</h5>
                     <hr/>
                </div>     
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Usuário administrador:</label>
                    <input type="user" class="form-control" id="exampleInputEmail1">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="botao">Entrar</button>
                </div>   
                
            </form>
        </div>

    
    </div>
    </div>
    

</body>
</html>