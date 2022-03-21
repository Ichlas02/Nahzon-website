@extends('layouts.main')

@section('container')
<h1 class="mb-3">Genre {{ $category }}</h1>
     @foreach ($posts as $post)
        <article class="mb-7 border-bottom pb-3 pt-3">
            <h3>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h3>
            <p>Oleh: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a></p>
            <p style="color:grey">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
    <a href="/genre">Lihat semua genre</a>
@endsection 