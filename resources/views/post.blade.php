@extends('layouts.main')

@section('container')
<article class="pb-3">
    <h1 class="mb-2">{{ $post->title }}</h1>
    <p class="mb-1">Oleh: <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a></p>
    <p class="mb-3">Genre: <a href="/genre/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
   {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>
@endsection
