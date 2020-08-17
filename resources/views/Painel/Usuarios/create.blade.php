@extends('Painel.Layout.index')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Cadastro de Clientes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('Painel.Usuarios.store') }} ">
                        {{ csrf_field() }}        
                        
                        @if(session('error'))
                            <span class="alert alert-danger">{{ session('error') }}</span>
                        @endif

                        <div class="form-group">
                            <label class="control-label" for="name">
                                <i class="fa fa-times-circle-o"></i> Nome completo
                            </label>
                            <input type="text" class="form-control" id="name" placeholder="Digite o nome" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">
                                <i class="fa fa-times-circle-o"></i> E-mail
                            </label>
                            <input type="email" class="form-control" id="email" placeholder="Digite o E-mail" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">
                                <i class="fa fa-times-circle-o"></i> Senha
                            </label>
                            <input type="password" class="form-control" id="password" placeholder="Digite a senha" name="password" required>
                        </div>                    

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Plano</label>
                                    <select class="form-control" required>
                                        <option>1 Tela Mensal</option>
                                        <option>1 Tela Trimestral</option>
                                        <option>1 Tela Semestral</option>
                                        <option>1 Tela Anual</option>
                                    </select>
                                </div>
                            </div>                            
                        </div> 
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <a href="{{ route('Painel.Usuarios.index') }}" type="submit" class="btn btn-ganger pull-right">Cancelar</a>
                        </div>                       
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>

@endsection