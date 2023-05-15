<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);

        $tableColumns = \getModelTableColumns($posts);

        return view('dashboard.modules.posts.index', [
            'title' => 'İçerikler',
            'description' => 'İçeriklerin listelendiği sayfa.',
            'posts' => $posts,
            'tableColumns' => $tableColumns,
        ]);
    }

    public function create()
    {
        return view('dashboard.modules.posts.create', [
            'title' => 'İçerik Oluştur',
            'description' => 'İçerik oluşturulduğu sayfa.',
            'posts' => Post::all(),
        ]);
    }

    public function store(StorePostRequest $request)
    {
    }

    public function show(Post $post)
    {
    }

    public function edit(Post $post)
    {
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
    }

    public function destroy(Post $post)
    {
    }

    public function get()
    {
        return Post::all()->toJson();
    }
}
