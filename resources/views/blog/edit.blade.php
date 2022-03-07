@extends('layout')

@section('content')

    <h1>New Article</h1>

    <form method="post" action="/blog/{{$article->id}}">
        @csrf
        @method('put')

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input value="{{$article->title}}"
                    class="input is-danger-box"
                    id="title"
                    name="title">

            </div>

        </div>

        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class="control">
                <textarea
                    class="input is-danger-box"
                    id="excerpt"
                    name="excerpt">
                    {{$article->excerpt}}
                </textarea>

            </div>

        </div>

        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea
                    class="input is-danger-box"
                    id="body"
                    name="body">
                    {{$article->body}}
                </textarea>

            </div>

        </div>

        <div>
            <button class="button" type="submit">Submit</button>
        </div>
    </form>

    <form method="post" action="/blog/{{$article->id}}">
    @csrf
    @method('delete')
    <button class="" type="submit">Delete</button>
    </form>


@endsection
