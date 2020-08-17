<!DOCTYPE html>
<html lang="pt-br">

@includeIf('Painel.Layout.head')


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @includeIf('Painel.Layout.header')

        @includeIf('Painel.Layout.sidebar_lateral')

        <div class="content-wrapper">
            
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                
                                @if(isset($urlAtual))
                                    <small>{{ $urlAtual }} </small>                                                                 
                                @else
                                    <small>Painel de Controle</small>                                    
                                @endif
                                
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route("Painel.index")}}">Home</a>/</li>

                                @if(isset($urlAtual))
                                    <small>{{ $urlAtual }} </small>                                                                 
                                @else
                                    <small>Painel de Controle</small>                                    
                                @endif                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>

        @includeIf('Painel.Layout.footer')

    </div>

    @includeIf('Painel.Layout.javascript')

</body>

</html>

<!-- Content Header (Page header)
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    Painel de Controle
                    
                    //@if(isset($urlAtual))
                       // <small>{{$urlAtual}}</small>
                  //  @else
                      //  <small>Página Principal</small>
                   // @endif
                    

                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Página Principal</li>
                </ol>
            </div>
        </div>
    </div>
</div> -->