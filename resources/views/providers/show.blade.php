@extends('layout')

@section('content')

    <h1 class="title">{{$provider->name}}</h1>

    <div class="content">{{$provider->email}}</div>

    <div class="content">{{$provider->monthlyPayment}}</div>

    <p>
        <a href="/providers/{{$provider->id}}/edit">Edit</a>
    </p>

@endsection
