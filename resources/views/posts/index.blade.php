@extends('default')

@section('content')
    @foreach($posts as $post)
        <h1>{{ $post -> title }}</h1>
        <p>{{ $post -> content }}</p>
        <p><a class="btn btn-primary" href="{{ route('bde_modifier.edit', $post) }}">Editer</a></p>
    @endforeach
@endsection