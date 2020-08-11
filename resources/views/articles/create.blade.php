@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="title">New Article</h1>

            <form action="">
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input id="title" type="text" class="input" name="title">
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea id="excerpt" class="input" name="excerpt"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea id="body" class="input" name="body"></textarea>
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
