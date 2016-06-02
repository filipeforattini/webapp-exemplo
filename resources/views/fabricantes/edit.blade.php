@extends('layouts.app')

@section('content')
	<form class="form" action="/fabricantes/{{ $fabricante->id }}" method="POST">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-offset-1 col-md-9">
				<input type="text" name="nome" value="{{ $fabricante->nome }}" class="form-control">
			</div>
			<div class="col-md-1">
				<input type="submit" class="btn btn-primary" value="Salvar">
			</div>
		</div>
	</form>
@endsection
