@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded shadow">

<h1 class="text-4xl font-bold mb-3">
    {{ $article->title }}
</h1>

<p class="text-gray-500 mb-6">
    {{ $article->category->name }}
    • {{ $article->reading_time }} min read
</p>

<div class="leading-8 text-lg">
    {{ $article->content }}
</div>

</div>

@endsection