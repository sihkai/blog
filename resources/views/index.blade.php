@extends('layouts.master')
@section('title', '頁面標題')
@section('content')
    <div class="container">
        <div class="container">
            @foreach ($users as $user)
                {{ $user->title }}
            <br>
                {{ $user->message }}
                <br>
            @endforeach
        </div>
       {!! $users->links() !!}
    </div>
@endsection

