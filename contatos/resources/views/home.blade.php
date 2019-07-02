<link rel="stylesheet" href="{{ 'css/style.css' }}">
<h1><u>Meus Contatos</u></h1>

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
			</tr>
		@endforeach
	</table>
	@else
	<h4>Nenhum contato existente!</h4>
	@endif
</div>