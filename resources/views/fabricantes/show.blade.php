@extends('layouts.app')

@section('content')
	<div>
		<h2>{{ $fabricante->nome }}</h2>
	</div>
	@foreach($fabricante->produtos as $produto)
		<div>
			{{ $produto->nome }}
		</div>
	@endforeach
@endsection
