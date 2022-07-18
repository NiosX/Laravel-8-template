@extends('layouts.mail')
@section('content')
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <img src="{{ $details['img'] }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" width="200px">
    <p>Thank you</p>
@endsection
