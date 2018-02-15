@extends('layout')

@section('conteudo')
	<section class="content-header">
        <h1>Index</h1>
    </section>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Estado</th>
				<th scope="col">Abreviatura</th>
				<th></th>
			</tr>
		</thead>
		@foreach($states as $state)
		<tr>
			<td>{{ $state->name }}</td>
			<td>{{ $state->acronym }}</td>
			<td>
				<a class="btn btn-success" href="{{ route('state.edit', ['id' => $state->id]) }}">
                    <i class="fa fa-pencil-square-o"></i>
                    Editar
                </a>
				<a class="btn btn-danger" href="{{ route('state.destroy', ['id' => $state->id]) }}">
                    <i class="fa fa-trash-o"></i>
                    Deletar
                </a>
			</td>
		</tr>
		@endforeach
	</table>
	<a class="btn btn-primary" href="{{ route('state.create') }}">Criar novo</a>
@endsection