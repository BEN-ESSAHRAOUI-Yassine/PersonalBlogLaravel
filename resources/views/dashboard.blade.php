@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-6">
    <h1 class="text-3xl font-bold">
        Dashboard
    </h1>

    <a href="{{ route('articles.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        New Article
    </a>
</div>

@foreach($articles as $article)

<div class="bg-white p-4 rounded shadow mb-4">

<div class="flex justify-between">

<div>
<h2 class="font-bold text-xl">
{{ $article->title }}
</h2>

<p class="text-sm text-gray-500">
{{ $article->category->name }}
• {{ $article->status }}
</p>
</div>

<div class="space-x-2">

<a href="{{ route('articles.edit', $article) }}"
   class="text-blue-600">
   Edit
</a>

<form method="POST"
      action="{{ route('articles.destroy', $article) }}"
      class="inline"
      onsubmit="return confirm('Delete article?')">

    @csrf
    @method('DELETE')

    <button class="text-red-600">
        Delete
    </button>

</form>

</div>

</div>

</div>

@endforeach

@endsection