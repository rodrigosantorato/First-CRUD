<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Provider</title>
</head>
<body>
    <h1>Create new Provider</h1>

    <form method="POST" action="/providers">
        {{csrf_field()}}
        <div>
            <input type="text" name="name" placeholder="Provider name" required value="{{old('name')}}">
        </div>

        <div>
            <input type="email" name="email" placeholder="Provider email" required value="{{old('email')}}">
        </div>

        <div>
            <input type="number" name="monthlyPayment" placeholder="Monthly Payment" required value="{{old('monthlyPayment')}}">
        </div>

        <div>
            <button type="submit">Create Provider</button>
        </div>
    </form>

    @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>
