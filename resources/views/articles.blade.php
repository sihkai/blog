@extends('layouts.master')
@section('title', '頁面標題')
@section('content')


        <h4>{{ $articles->id }}</h4>
        <br>
        <h4>{{ $articles->title }}</h4>
        <br>
        <h4>{{ $articles->message }}</h4>
        <br>
        <h4>{{ $articles->detail }}</h4>


@endsection