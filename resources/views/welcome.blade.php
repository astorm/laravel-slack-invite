@extends('layout')

@section('content')
    <h1>Pulse Storm Office House Slack</h1>
    <p style="width:500px">
        Enter your email address in the form below, click <em>Get Invite</em>, and your invitation will be on its way. 
    </p>
    </p>
    <form action="/invite" method="post">
        <input type="text" name="email" id="email" style="margin-bottom:10px"/> 
        <br/>
        <input type="submit" value="Get Invite" class="btn btn-success" style="font-size:24px"/>
        {{ csrf_field() }}

    </form>
@endsection