@extends('layouts.master')

@section('title', '頁面標題')

@section('content')

        <form action="{{ url('register/check') }}" Method=post>
            <input type="hidden" name ='id'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <TABLE BORDER=7 >
                <TR><TD ALIGN=RIGHT>註冊名稱:</TD>
                    <TD>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                                 　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                                 　　 ID="Text1" NAME="userac" required="required"></TD></TR>
                <TR><TD ALIGN=RIGHT>註冊密碼:</TD>
                    <TD>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                                 　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                                 　　 ID="Text1" NAME="passwd" required="required" type="password"></TD></TR>
            </TABLE>
                <INPUT Type=Submit Value="註冊" name="B1">
        </form>

@endsection

