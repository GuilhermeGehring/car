<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body style="margin: 1%">
    <section class="content-header">
        <h1>Create</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <form role="form" id="form" method="post" action="{{ route('state.store') }}" enctype="multipart/form-data">
                            <div class="box-body">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" class="form-control" name="name" title="Name" value="">
                                </div>

                                <div class="form-group">
                                    <label>Abreviatura</label>
                                    <input type="text" class="form-control" name="acronym" title="Abreviatura" value="">
                                </div>

                                <div class="form-group" style="float:right">
                                    <a href="{{ route('state.index') }}" title="Cancela/Volta - Cancelando você perderá todos os dados informados">
                                            <div class="btn btn-danger"> CANCELAR/VOLTAR </div>
                                    </a>
                                    &nbsp;
                                    <button type="submit" class="btn btn-success" title="Salvar - Grava ou altera os dados.">
                                        SALVAR DADOS
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>