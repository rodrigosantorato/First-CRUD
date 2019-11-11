@extends('layout')

@section('content')

    <h1>Edit Provider</h1>

    <form method="POST" action="/providers/{{$provider->id}}">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <div class=""field">
            <label class="label" for="name">Name</label>

            <div class="control">
                <input type="text" class="input" name="name" placeholder="name" value="{{$provider->name}}">
            </div>
        </div>

        <div class=""field">
            <label class="label" for="email">Email</label>

            <div class="control">
                <input type="email" class="input" name="email" placeholder="email" value="{{$provider->email}}">
            </div>
        </div>

        <div class=""field">
            <label class="label" for="monthlyPayment">Monthly Payment</label>

            <div class="control">
                <input type="number" class="input" name="monthlyPayment" placeholder="monthly payment" value="{{$provider->monthlyPayment}}">
            </div>
        </div>

        <divclass="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Provider</button>
            </div>
        </divclass>
    </form>

    <form method="POST" action="/providers/{{$provider->id}}">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <divclass="field">
            <div class="control">
                <button type="submit" class="button">Delete Provider</button>
            </div>
        </divclass>
    </form>

@endsection
