@extends('layouts.master')
@section('title', '頁面標題')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增文章</div>

                    <div class="panel-body">


                        <form action="{{ URL('admin/article/addarticle') }}" method="POST">
                            <input type="hidden" name ='id'>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h5>標題</h5>
                            <input type="text" name="title" class="form-control" required="required">
                            <h5>故事前敘述</h5>
                            <input type="text" name="message" class="form-control" required="required">
                            <br>
                            <textarea name="detail" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <button class="btn btn-lg btn-info" onclick="return(confirm('yoyoyyo'))">新增文章</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
