<link rel="stylesheet" href="{{ 'css/style.css' }}">
<h1><u>Meus Contatos</u></h1>

<form method="POST">
	{{ csrf_field() }}
	<input type="text" name="nome" placeholder="Nome">

	<input type="email" name="email" placeholder="Email">

	<input type="submit" value="Salvar">
</form>

<div id="role-overflow">
	@if(count($contatos))
	<table border="1" width="100%">
		<tr>
			<th>NOME</th>
			<th>EMAIL</th>
		</tr>
		@foreach($contatos as $contato)
			<tr>
				<td>{{ $contato->name }}</td>
				<td>{{ $contato->email }}</td>
				<td><a href="delete/{{ $contato->id }}">Excluir</a> - <a href="editar/{{ $contato->id }}">Editar</a></td>
			</tr>
		@endforeach
	</table>
	@else
	<h4>Nenhum contato existente!</h4>
	@endif
</div>