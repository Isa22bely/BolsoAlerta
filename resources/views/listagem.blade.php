@extends('layout')
@section('content')
<div></div>


<div class="d-flex justify-content-around" style="padding: 30px">

    <div style="width: 35%; margin-top: 25px;">
        <h5  class="fw-bold text-center">EMERGÊNCIAS EM ANDAMENTO</h5>
        <a href="/emergencia" style="text-decoration: none;">
            <div class="card" >
                <div class="carde" style="padding-top:8px; height: 100%">
                    <p class="text-center">
                        Av. dos imigrantes, 1000 - Jardim Panorama, Varginha
                    </p>
                    <div class="mx-auto p-2" style="width: 80%;">
                        <hr/>
                    </div> 
                    <p class="text-center">
                        INCÊNDIO RESIDENCIAL
                    </p>
                    <div class="text-center figEmergencia">
                        <img  src="{{asset('storage/exemplo/emergenciaFogo.svg')}}"style="max-width: 3rem;">
                        <img  src="{{asset('storage/exemplo/emergenciaCasa.svg')}}"style="max-width: 3rem;">
                    </div>
                </div>
            </div>
        </a>
    </div>
 

    <div>
        <hr class=" vertical">
    </div>

    <div style="width: 35%; margin-top: 25px;">
    <h5 class="fw-bold text-center" >NOVAS EMERGÊNCIAS </h5>
        <div class="card" >
            <div class="carde" style="padding-top:8px; height: 100%">
                <p class="text-center">
                    BR MG-129, km 20
                </p>
                <div class="mx-auto p-2" style="width: 80%;">
                    <hr/>
                </div> 
                <p class="text-center">
                    ACIDENTE  DE TRÂNSITO
                </p>
                <div class="text-center figEmergencia">
                    <img  src="{{asset('storage/exemplo/emergenciaCarro.svg')}}"style="max-width: 3rem;">
                </div>
            </div>
        </div>
    </div>


</div>








@endsection