@extends('Painel.Layout.index')

@section('content')

<section class="content">
    <!--<div class="container-fluid">
        <div class="row">
            
        </div>
    </div>-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Clientes | <a href="{{ route('Painel.Usuarios.create')}}" class="btn btn-success"><i class="fa fa-plus"></i></a> @if (session('success')) | <span class="alert alert-success">{{ session('success') }}</span> @endif </h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data de criação</th>
                                <th>E-mail</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                                                    
                        
                        <tbody>
                            @foreach ($usuarios as $usuarios)
                                <tr>
                                    <td>{{$usuarios->id}}</td>
                                    <td>{{$usuarios->name}}</td>
                                    <td>{{$usuarios->created_at->diffForHumans()}}</td>
                                    <td>{{$usuarios->email}}</td>
                                    <td>
                                        <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger"><i class="fa fa-trash"></i></a>                                        
                                    </td>
                                </tr>
                            @endforeach   
                        </tbody>
                        
                        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data de criação</th>
                                <th>E-mail</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

</section>

@endsection