@extends('adminlte::page')
@section('title' , 'Home | Laravel Emploiye App')
{{-- le titre de la page --}}
@section('content_header')
    <h1>Dachbord</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4 ">
                {{-- cette card pou aficher le nombre des Emploiyé  --}}                    
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\Emploiye::count() }}</h3>
                        <p>Emploiyes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ url('admin/emploiyes') }}" class="small-box-footer">
                        Mor Infor <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection