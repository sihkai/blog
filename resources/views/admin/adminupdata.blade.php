@extends('layouts.master')
@section('title', '頁面標題')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">編輯文章</div>
                    <div class="panel-body">
                        <form action="{{ URL('admin/article/up/check/'.$articles ->id) }}" method="POST">
                            <input type="hidden" name ='id'>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h5>標題</h5>
                            <input type="text" name="title" class="form-control" required="required" value={{ $articles->title }}  >

                            <h5>故事前敘述</h5>
                            <input type="text" name="message" class="form-control" required="required" value={{ $articles->message }}>
                            <br>
                            <textarea name="detail" rows="10" class="form-control" required="required">{{ $articles->detail }}</textarea>
                            <br>
                            <button class="btn btn-lg btn-info" onclick="return(confirm('確定編輯？'))">編輯文章</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

