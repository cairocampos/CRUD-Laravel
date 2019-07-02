<h1>Editar Contato</h1>

<form method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $contato->id }}">
	<input type="text" name="nome" value="{{ $contato->name }}">
	<input type="email" name="email" value="{{ $contato->email }}">
	<input type="submit" value="Editar">
</form>