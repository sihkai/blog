@extends('layouts.master')
@section('title', '頁面標題')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">文章首頁</div>
                    <div class="panel-body">
                        @foreach ($articles as $article)
                            <a href="{{ URL('articles/detail?id='.$article->id)  }}">
                            <h4>{{ $article->id }}</h4>
                            </a>
                            <div class="title">
                                    <h4>{{ $article->title }}</h4>
                            </div>
                            <div class="Message">
                                <p>{{ $article->message }}</p>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
