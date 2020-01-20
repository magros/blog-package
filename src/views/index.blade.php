@extends('BlogPackage::layout')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Creación</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{route('blog.package.edit', $post->id)}}">Editar</a></td>
                <td>
                    <form method="DELETE" action="{{route('blog.package.delete', $post->id)}}">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection