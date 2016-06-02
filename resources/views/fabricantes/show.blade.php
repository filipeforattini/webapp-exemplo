@extends('layouts.app')

@section('content')
	<div>
		<h2>{{ $fabricante->nome }}</h2>
	</div>
	<hr>
	@foreach($fabricante->produtos->chunk(4) as $row)
		<div class="row">
			@foreach($row as $produto)
				<div class="col-md-3">
					<div style="height: 100px">
						<img src="http://lorempixel.com/100/100/food/{{ ($produto->id)%10 }}">
					</div>
					<h3>{{ $produto->nome }}</h3>
				</div>
			@endforeach
		</div>
	@endforeach
@endsection
