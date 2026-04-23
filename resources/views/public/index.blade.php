@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Latest Articles
</h1>

<form method="GET" class="flex gap-3 mb-6">

    <input type="text"
           name="search"
           placeholder="Search title..."
           value="{{ request('search') }}"
           class="border p-2 rounded">

    <select name="category"
            class="border p-2 rounded">

        <option value="">All Categories</option>

        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                @selected(request('category') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach

    </select>

    <button class="bg-blue-600 text-white px-4 rounded">
        Filter
    </button>

</form>

<div class="grid md:grid-cols-2 gap-6">

@foreach($articles as $article)

<div class="bg-white p-5 rounded shadow">

    <h2 class="text-xl font-bold mb-2">
        {{ $article->title }}
    </h2>

    <p class="text-sm text-gray-500 mb-2">
        {{ $article->category->name }}
        • {{ $article->created_at->format('d M Y') }}
        • {{ $article->reading_time }} min read
    </p>

    <p class="mb-4">
        {{ Str::limit($article->content, 140) }}
    </p>

    <a href="{{ route('article.show', $article) }}"
       class="text-blue-600 font-bold">
        Read More →
    </a>

</div>

@endforeach

</div>

<div class="mt-8">
    {{ $articles->links() }}
</div>

@endsection