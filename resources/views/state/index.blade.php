<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body style="margin: 1%">
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
				<a href="{{ route('state.edit', ['id' => $state->id]) }}">Editar</a> |
				<a href="{{ route('state.destroy', ['id' => $state->id]) }}">Deletar</a>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ route('state.create') }}">Criar novo</a>
</body>
</html>