@extends('layouts.master')
@section('title', '頁面標題')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">後台首頁</div>
                    <div class="panel-body">
                        <a href="{{ URL('backend/insert') }}" class="btn btn-lg btn-primary">新增</a>
                        @foreach ($articles as $article)
                            <hr>
                            <div class="page">
                                <h4>{{ $article->title }}</h4>
                                <div class="content">
                                    <p>
                                        {{ $article->message }}
                                    </p>
                                </div>
                            </div>
                            <form action="{{ url('backend/edit/'.$article->id) }}" method="post" style="display: inline;">
                                <input type="hidden" name="id">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success">編輯</button>
                            </form>

                            <form action="{{ url('admin/article/del/'.$article->id) }}" method="post" style="display: inline;">
                                <input type="hidden" name="id">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger" onclick="return(confirm('確認刪除？'))"> 刪除</button>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
