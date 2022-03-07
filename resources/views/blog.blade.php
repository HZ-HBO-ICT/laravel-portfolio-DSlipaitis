@extends('layout')

@section('content')
<main>
    <div class="page_content">
        <h1>
            Blog Page
        </h1>
        <section id="main">
            <div class="frame">
                @foreach($articles as $article)
                    <span class="caption">
                        <h2>{{ $article->title }}</h2>
                        <p> <a href="#">{{ $article->excerpt }}</a></p>
                    </span>
                @endforeach
            </div>
{{--            </div>--}}
{{--            <div class="frame">--}}
{{--                <a href="programming-experience">--}}
{{--            <span class="caption">--}}
{{--              <h2>Programming Experience</h2>--}}
{{--              <p class="desc">Before attending HZ university of applied sciences I have filled a questionnaire...</p>--}}
{{--            </span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="frame">--}}
{{--                <a href="data-science-company">--}}
{{--            <span class="caption">--}}
{{--              <h2>Data Science Comapny</h2>--}}
{{--              <p class="desc">Data science company I have chosen to write about in this post is Unit8 SA. The company...--}}
{{--              </p>--}}
{{--            </span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="frame">--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}

</main>
@endsection
