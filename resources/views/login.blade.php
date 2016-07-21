@extends('layouts.master')

@section('title', '頁面標題')


@section('content')
    <form action="{{ url('login/LoginCheck') }}" method=post>
        <input type="hidden" name ='id'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table border="7" >
            <tr><td aign=right>登入名稱:</td>
                <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                             　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                             　　 ID="Text1" NAME="account" required="required"></td></tr>
            <tr><td align=right>密碼:</td>
                <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                             　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                             　　 id="text1" name="password" required="required" type="password"></td></tr>
        </table>
        <input Type=submit Value="登入" name="B1">
    </form>
@endsection