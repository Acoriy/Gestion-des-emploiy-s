@extends('adminlte::page')
    

@section('title' , 'Show | Laravel Emploiye App')
{{-- le titre de la page --}}
@section('content_header')
    <h1>Emploiyes</h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row ">
            <div class="col-md-8 mx-auto ">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>{{ $emploiye->fullname }}</h3>
                        </div>
                        <hr>
                        <div class="mt-2 text-center font-weight-bold text-uppercase">
                            <a href="{{ route('DemandeConger',$emploiye->registration_number) }}" class="btn btn-outline-dark">
                                Demmande de conger
                            </a>
                            <a href="{{ route('AtistationTravalie' , $emploiye->registration_number) }}" class="btn btn-outline-danger">
                                Attistassion de travaille
                            </a>
                        </div>
                        <hr>
                    </div>
                    <div class="card-body">
                       
                        <div class="form-group mb-3">
                            <label for="registrition_number" >Registrition Number</label>
                            <input type="text" disabled class="form-control rounded-0" name="registrition_number" placeholder="Nom complete" maxlength="9" value="{{ $emploiye->registration_number}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname" >Nom complete</label>
                            <input type="text" disabled class="form-control rounded-0" name="fullname" placeholder="Nom complete" value="{{$emploiye->fullname}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="depart" >Departement</label>
                            <input type="text" disabled class="form-control rounded-0" name="depart" placeholder="Departement" value="{{ $emploiye->depart}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="hire_date" >Date d'embauche</label>
                            <input type="date" disabled class="form-control rounded-0" name="hire_date" placeholder="Date d'embauche" value="{{ $emploiye->hire_date }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Num_Telephone" >Numero de teleohone</label>
                            <input type="tel" disabled class="form-control rounded-0" name="Num_Telephone" placeholder="Numero de teleohone" value="{{ $emploiye->phone}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" >Adresse</label>
                            <input type="text" disabled class="form-control rounded-0" name="address" placeholder="Adresse" value="{{ $emploiye->address}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="ville" >Ville</label>
                            <input type="text" disabled class="form-control rounded-0" name="ville" placeholder="Ville" value="{{ $emploiye->city }}">
                        </div>
                     
                        
                        </form>
                    </div>          
                </div>
            </div>
        </div>
    </div>
@endsection

