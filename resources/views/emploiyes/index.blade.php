@extends('adminlte::page')

@section('plugins.Datatables',true)
    


@section('title' , 'Home | Laravel Emploiye App')
{{-- le titre de la page --}}
@section('content_header')
    <h1>Liste Des Emploiyes</h1>
@endsection

@section('content')
    <div class="container">
      
        <div class="row ">
            <div class="col-md-10 mx-auto ">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Emploiyes</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>IdEmploiyer</th>
                                    <th>Nom Complte</th>
                                    <th>Departement</th>
                                    <th>Date dembouche</th>
                                    <th>Telephone</th>
                                    <th>Addriss</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($emploiyes as $key=>$emploiye)
                                    <tr>
                                        <td>{{$emploiye->registration_number}}</td>
                                        <td>{{ $emploiye ->fullname }}</td>
                                        <td>{{ $emploiye ->depart }}</td>
                                        <td>{{ $emploiye ->hire_date }}</td>
                                        <td>{{ $emploiye ->phone }}</td>
                                        <td>{{ $emploiye ->address}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('emploiyes.show',$emploiye->registration_number) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('emploiyes.edit',$emploiye->registration_number) }}" class="btn btn-sm btn-warning mx-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('emploiyes.destroy',$emploiye->registration_number) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection

    {{-- Datatables :  --}}
@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy','excel','csv','pdf','print','colvis'
                ]
            }); 
        }); 
    </script>
    {{-- sweetalert :  --}}
    @if (session()->has('success'))
        <script>
          Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: '{{ session()->get('success') }}',
          showConfirmButton: false,
          timer: 2200
          });
        </script>
    @endif
@endsection

