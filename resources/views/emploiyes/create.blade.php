@extends('adminlte::page')
    

@section('title' , 'Creé | Laravel Emploiye App')
{{-- le titre de la page --}}
@section('content_header')
    <h1>Liste Des Emploiyes</h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row ">
            <div class="col-md-8 mx-auto ">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Liste Des Emploiyes</h4>
                        </div>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('emploiyes.store') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="registrition_number" >Registrition Number</label>
                            <input type="text"  class="form-control" name="registrition_number" placeholder="Nom complete" maxlength="9" value="{{ old('registrition_number') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname" >Nom complete</label>
                            <input type="text"  class="form-control" name="fullname" placeholder="Nom complete" value="{{ old('fullname') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="depart" >Departement</label>
                            <input type="text"  class="form-control" name="depart" placeholder="Departement" value="{{ old('depart') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="hire_date" >Date d'embauche</label>
                            <input type="date"  class="form-control" name="hire_date" placeholder="Date d'embauche" value="{{ old('hire_date') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Num_Telephone" >Numero de teleohone</label>
                            <input type="tel"  class="form-control" name="Num_Telephone" placeholder="Numero de teleohone" value="{{ old('Num_Telephone') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" >Adresse</label>
                            <input type="text"  class="form-control" name="address" placeholder="Adresse" value="{{ old('address') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="ville" >Ville</label>
                            <input type="text"  class="form-control" name="ville" placeholder="Ville" value="{{ old('ville') }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Ajouter
                            </button>
                        </div>
                        
                        </form>
                    </div>          
                </div>
            </div>
        </div>
    </div>
@endsection

