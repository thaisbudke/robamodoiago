@extends('layouts.app')

@section('content')
<h1> Criar Esportes <br><br>

<form action="/esportes" method="post">
	{{ csrf_field() }}
	Nome: <input type="text" name="nome">				<br>
	Descricao: <input type="text" name="descricao">					<br>
	Data: <input type="datetime-local" name="data">			<br>
    Genero: <input type="text" name="genero">					<br>
    Resultado: <input type="text" name="resultado">					<br>
	Evento: <select name='evento_id'>
			@foreach($eventos as $evento)
					<option value="{{$evento->id}}">{{$evento->titulo}}</option>
			@endforeach
	</select><br>


	<input type="submit" value="salvar">
</form>
</h1> 
@endsection