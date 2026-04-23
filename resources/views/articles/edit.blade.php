@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
Edit Article
</h1>

<form method="POST"
      action="{{ route('articles.update',$article) }}">

@csrf
@method('PUT')

@include('articles.form')

</form>

@endsection