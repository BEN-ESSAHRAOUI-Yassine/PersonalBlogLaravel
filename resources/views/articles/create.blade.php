@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
Create Article
</h1>

<form method="POST" action="{{ route('articles.store') }}">
@csrf

@include('articles.form')

</form>

@endsection