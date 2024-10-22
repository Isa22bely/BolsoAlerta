@extends('layout')
@section('content')
<div class="texto">
    <div class="text-center">
            <h2 class="fw-medium"> EMERGÊNCIA EM ANDAMENTO</h2>
    </div>
</div>

<div class="pbotao">
<img  src="{{asset('storage/exemplo/voltarb.svg')}}"style="max-width: 3rem;">
</div>
<div></div>
  

<div class="entrecard">
    <div class="card text-center">
    <div class="carde" >
        <h5 class="text-start">endereço:</h5>
        <p class="text-start">Av. dos imigrantes, 1000 - Jardim Panorama, Varginha</p>
        <div class="mx-auto p-2" style="width: 400px;">
            <hr/>
        </div> 
        <h5 class="text-start">TIPO DE EMERGÊNCIA:</h5>
        <p class="text-start">Incêndio residencial</p>
        <div class="mx-auto p-2" style="width: 400px;">
            <hr/>
        </div> 
        <h5 class="text-start">PESSOA QUE REALIZOU A CHAMADA:</h5>
        <p class="text-start">Maria das Graças de Souza</p>
        <p class="text-start">Deficiente auditivo(a)</p>
        
    </div> 
    </div>
</div>

<div class="cardchat">
    <div class="card border-secondary mb-3" style="max-width: 10rem;">
        <div class="carde">
            <img  src="{{asset('storage/exemplo/chat.svg')}}"style="max-width: 10rem;">
        </div>
    </div>
</div>

@endsection