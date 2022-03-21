@extends('layouts.main')

@section('container')
<h1 class="mb-3">List Genre</h1>
     @foreach ($genre as $category)
     <ul>
         <li>
            <h3>
                <a href="/genre/{{ $category->slug }}" class="text-decoration-none">
                    {{ $category->name }}
                </a>
            </h3>
         </li>
     </ul>
    @endforeach
    <a href="/posts">Kembali ke posts</a>
@endsection 