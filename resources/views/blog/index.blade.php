@extends('layout')

@section('content')
<main>
   <div class="page_content">
        <h1>
            Blog Page
        </h1>
        <section id="main">
            <div class="frame">
                <span class="caption">
                @foreach($articles as $article)
                        <h2>{{ $article->title }}</h2>
                        <p> <a href="/blog/{{$article->id}}">{{ $article->excerpt }}</a></p>
                @endforeach
                </span>
            </div>
</main>
@endsection
