@extends('layouts.master')
@section('title', '頁面標題')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">前台首頁</div>
                    <div class="panel-body">
                        @foreach ($articles as $article)
                            <div class="page">
                                <a href="{{ URL('articles/detail/'.$article->id) }}" >
                                    {{ $article->title }}</a>
                                <br>
                                {{ $article->article }}
                            </div>
                            <hr>
                        @endforeach
                        {!! $articles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

