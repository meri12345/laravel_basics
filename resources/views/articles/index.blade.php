@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">

            <div>
                <ul class="style1">
                    @foreach($articles as $article)

                        <li class="first">
                            <div id="content">
                                <h3>{{$article->title}}</h3>
                                <p><a href="/articles/{{$article->id}}">{{$article->excerpt}}</a></p>
                                <div class="title">
                                    <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@endsection
