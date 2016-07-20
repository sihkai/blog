@extends('layouts.master')

@section('title', '頁面標題')

@section('content')

        <form action="{{ url('register/check') }}" Method=post>
            <input type="hidden" name ='id'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table BORDER=7 >
                <tr><td ALIGN=RIGHT>註冊名稱:</td>
                    <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                                 　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                                 　　 id="Text1" name="account" required="required"></td></tr>
                <tr><td ALIGN=RIGHT>註冊密碼:</td>
                    <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                                 　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                                 　　 id="Text1"name="password" required="required" type="password"></td></tr>
            </table>
                <input Type=Submit Value="註冊" name="B1">
        </form>

@endsection

