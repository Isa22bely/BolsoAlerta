@extends('layout')
@section('content')
<div class="texto">
    <div class="text-center">
            <h2 class="fw-medium"> CHAT DE EMERGÊNCIA</h2>
    </div>
</div>

<div class="pbotao">
    <img  src="{{asset('storage/exemplo/voltarb.svg')}}"style="max-width: 3rem;">
</div>

<div class="entrecard">
    
        <div class="ard text-center" style="max-width: 80%;">
            <div class="cardechat" >
                <nav class="navbar bg-body-tertiary"  >
                    <div class="container-fluid" >
                        <a class="navbar-brand" href="#">
                        <img src="{{asset('storage/exemplo/mensagen.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" >
                            Maria das Graças de Souza
                        </a>
                    </div>
                </nav>
                <div class="bloco">
                    <div class="blocoD">
                        <div class="card" style="max-width: 50%;" >
                            <p class="titulo">Corpo de Bombeiros</p>
                                <div class="card-body">
                                    <p class="text-break" >
                                    Há alguém preso na residência?
                                    </p>
                                </div>
                        </div>
                    </div>

                    <div class="blocoE">
                        <div class="card" style="max-width: 50%;" >
                            <p class="titulo">Maria das Graças</p>
                            <div>
                                <div class="text-center" >
                                    <img src="{{asset('storage/exemplo/image.png')}}" class="img-fluid"  alt="..." styles=" margin: 10%">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-break" >
                                    Tem 2 pessoas lá dentro
                                </p>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="envmensagen" >
                            <input  type="mensagen" class="rolagem" id="examplemensagem" > 

                            
                        </div>  
                    </div>  
                    
            </div>
        </div>
       
</div>

















@endsection