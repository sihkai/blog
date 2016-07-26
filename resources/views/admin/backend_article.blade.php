@extends('layouts.master')
@section('title', '頁面標題')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if(empty($articles))
                      <div class="panel-heading">新增文章</div>
                    @else
                      <div class="panel-heading">編輯文章</div>
                    @endif
                    <div class="panel-body">
                        <form action="{{ url('backend/insert/check') }}" method="POST">
                            @if(isset($id))
                            <input type="hidden" name ='id' value="{{$id}}">
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h5>標題</h5>
                            @if(empty($articles))
                                    <input type="text" name="title" class="form-control" required="required">
                                    <h5>故事前敘述</h5>
                                    <input type="text" name="article" class="form-control" required="required">
                                    <br>
                                    <textarea name="detail" rows="10" class="form-control" required="required"></textarea>
                                    <br>
                            @else
                                    <input type="text" name="title" class="form-control" required="required"value="{{$articles->title}}">
                                    <h5>故事前敘述</h5>
                                    <input type="text" name="article" class="form-control" required="required" value="{{$articles->article}}">
                                    <br>
                                    <textarea name="detail" rows="10" class="form-control" required="required">{{$articles->detail}}</textarea>
                            @endif
                            @if(empty($articles))
                                    <button class="btn btn-lg btn-info" onclick="return(confirm('確定新增文章？'))">新增文章</button>
                            @else
                                    <button class="btn btn-lg btn-info" onclick="return(confirm('確定編輯文章？'))">編輯文章</button>
                            @endif
                        </form
                            >
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
