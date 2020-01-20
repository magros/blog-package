@extends('BlogPackage::layout')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Creación</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{route('blog.package.edit', $post->id)}}">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection