@extends('layouts.dashboard')

@section('content')
    <h1>
        {{ $post->title}}
    </h1>
    <p>Slug: {{ $post->slug}}</p>
    <p> Categoria: {{  $post->category ? $post->category->name : 'non appartiene a nessuna categoria'}}</p>
    <p> {{ $post->content}}</p>

    <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id])}}">Modifica</a>
@endsection