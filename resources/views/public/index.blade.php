@extends('layouts.app')

@section('content')

<section class="hero">
    <h1>Thoughts, Code & Creativity.</h1>
    <p>
        Explore articles about Laravel, PHP,
        freelancing and productivity.
    </p>
</section>

<form method="GET" class="search-bar">

<input type="text"
name="search"
placeholder="Search article..."
value="{{ request('search') }}">

<select name="category">
<option value="">All Categories</option>

@foreach($categories as $category)
<option value="{{ $category->id }}">
{{ $category->name }}
</option>
@endforeach

</select>

<button class="btn">
Search
</button>

</form>

<div class="grid">

@foreach($articles as $article)

<div class="card">

<p class="meta">
{{ $article->category->name }}
• {{ $article->created_at->format('d M Y') }}
• {{ $article->reading_time }} min read
</p>

<h2>{{ $article->title }}</h2>

<p>
{{ Str::limit($article->content, 140) }}
</p>

<br>

<a href="{{ route('article.show',$article) }}"
class="btn">
Read Article
</a>

</div>

@endforeach

</div>

<div style="margin-top:40px">
{{ $articles->links() }}
</div>

@endsection