
<x-app-layout>

   <h1>Articles</h1>

   @foreach($articles as $article)
       <h2>{{ $article->title }}</h2>
       <p>{{ Str::limit($article->content, 100) }}</p>
       <p>Category: {{ $article->category->name }}</p>
   @endforeach
   
</x-app-layout>