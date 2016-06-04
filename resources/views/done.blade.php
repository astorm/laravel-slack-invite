@extends('layout')

@section('content')
    <h1>Thank you!</h1>
    <p>Your invite is on the way!</p>

    @if($support_url)
    <p style="width:500px">
    If you don't receive an invitation email in the next few minutes, check your spam folder and then <a href="{{{$support_url}}}">get in touch</a>. We'll get you manually added ASAP. 
    </p>
    @endif

@endsection