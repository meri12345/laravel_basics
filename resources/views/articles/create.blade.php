@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="title">New Article</h1>

            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input id="title" value="{{old('title')}}" type="text" class="input @error('title') is-danger @enderror" name="title">
                        @error('title')
                        <div class="help is-danger">{{$errors->first('title')}}</div>
                            @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea id="excerpt" class="input @error('excerpt') is-danger @enderror" name="excerpt">{{old('excerpt')}}</textarea>
                            @error('excerpt')
                        <div class="help is-danger">{{$errors->first('excerpt')}}</div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea id="body" class="input @error('body') is-danger @enderror" name="body">{{old('body')}}</textarea>
                        @error('body')
                        <div class="help is-danger">{{$errors->first('body')}}</div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Tags</label>
                    <div class="control select is-multiple">
                        <select name="tags[]" multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @error('body')
                        <div class="help is-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
