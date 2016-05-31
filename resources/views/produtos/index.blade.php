@extends('layouts.app')

@section('content')
    @foreach($produtos as $produto)
        <div>
            <p>{{ $produto->nome }}</p>
        </div>
    @endforeach
@endsection
