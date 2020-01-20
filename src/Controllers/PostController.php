<?php

namespace Magros\BlogPackage\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Magros\BlogPackage\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        $post = new Post();

        return view('BlogPackage::save', compact('post'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return 'articulo creado';
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('BlogPackage::save', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return 'articulo editado sludos';
    }

    public function index()
    {
        $posts = Post::all();

        return view('BlogPackage::index', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}