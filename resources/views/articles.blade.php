@extends('layouts.master')
@section('title', '頁面標題')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">文章</div>
                    <div class="panel-body">
        <br>
        <h4>{{ $articles->title }}</h4>
        <br>
        <hr>
        <h4>{{ $articles->detail }}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection