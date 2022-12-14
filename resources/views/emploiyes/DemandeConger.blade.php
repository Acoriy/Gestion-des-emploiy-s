@extends('adminlte::page')

@section('title' , 'Demane deconger')
    
@section('content')
    <div class="container">
        <div class="row ">
            <div class="card p-3 my-5 mx-auto">
                <div class="card-header">
                   <h3> Demange de conger </h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                        <b>{{ $emploiye->fullname }}</b> est principalement employé avec moi dans les domaines suivants :
                    </p>
                    <p class="lead">
                        <b>{{ $emploiye->depart }}</b> departement.
                    </p>
                    <p class="lead">
                        Il demande des vacances à partir de <b>________________________</b>
                    </p>
                    <p class="lead">
                        Et se termine le <b>________________________</b>
                    </p>
                    <p class="m-5">
                        _______________
                        _______________
                    </p>
                    {{-- fonction javascripte pour Imprimer la page --}}
                    <div class="my-4">
                        <a href="#" 
                        onclick=
                        "document.getElementById('printLink').style.display = 'none' ;
                        setTimeout(function(){
                            document.getElementById('printLink').style.display = 'inline-block' ;
                        },2000);
                         window.print();" 
                         class="btn btn-sm btn-primary" id="printLink">
                            <i class="fas fa-print" ></i>
                        </a>
                    </div>
                    {{-- ------------------------------------------- --}}
                </div>
                

            </div>
        </div>
    </div>

@endsection