@extends('layouts.main')

@section('container')

@foreach ($post as $Posts )
<article class="container p-4 mb-5 bg-info">
    <h2><a class="text-decoration-none text-black-50" href="/posts/{{ $Posts['slug']}}">{{ $Posts["title"] }}</a></h2>
    <p>{{ $Posts["body"] }}</p>
</article>

@endforeach

@endsection