@extends('layouts.app')

@section('content')

<div class="hero" style="padding-top:30px">
<h1>Your Articles</h1>
<p>Manage drafts and published posts.</p>
</div>

<a href="{{ route('articles.create') }}"
class="btn">
+ New Article
</a>

<br><br>

@foreach($articles as $article)

<div class="card">

<h2>{{ $article->title }}</h2>

<p class="meta">
{{ $article->category->name }}
• {{ ucfirst($article->status) }}
</p>

<a href="{{ route('articles.edit',$article) }}">
Edit
</a>

|

<form method="POST"
action="{{ route('articles.destroy',$article) }}"
style="display:inline"
onsubmit="return confirm('Delete article?')">

@csrf
@method('DELETE')

<button style="color:red">
Delete
</button>

</form>

</div>

@endforeach

@endsection