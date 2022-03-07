@extends('layout')

@section('content')
    <main class="page_content">
        <div class="goback">
            <a href="../blog"><button class="button"><span class="arrow left"></span> Go Back</button></a>
        </div>

    <h1>{{$article->title}}</h1>

    <p class="column">{{$article->body}}</p>

    </main>
@endsection
