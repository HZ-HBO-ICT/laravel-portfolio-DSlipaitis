@extends('layout')

@section('content')
<main>
    <ul>
            <div class="page_content">
                @foreach($faqs as $faq)
                <article class="faq">
                    <h3>{{ $faq->question}}</h3>
                    <p>{{ $faq->answer}}</p>
                </article>
                @endforeach
            </div>
    </ul>
</main>
@endsection
