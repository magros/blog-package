@extends('BlogPackage::layout')

@section('content')
    <h1>{{$post->id ? 'Editando articulo': 'Creando articulo'}}</h1>
    <form method="POST">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">

        <label for="body">Descripción</label>
        <textarea name="body" id="body">{{$post->body}}</textarea>

        <button type="submit">Guardar</button>
    </form>
@endsection