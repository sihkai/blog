@extends('layouts.master')

@section('title', '頁面標題')


@section('content')
    <form action="{{ url('login/rr') }}" method=post>
        <input type="hidden" name ='id'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table border="7" >
            <tr><td aign=RIGHT>登入名稱:</td>
                <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                             　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                             　　 ID="Text1" NAME="userac" required="required"></td></tr>
            <tr><td align="" =right>密碼:</td>
                <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                             　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                             　　 ID="Text1" NAME="passwd" required="required" type="password"></td></tr>
        </table>
        <INPUT Type=Submit Value="登入" name="B1">
    </form>
@endsection