<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provider</title>
</head>
<body>
<h1>Providers</h1>

    <ul>
        @foreach($providers as $provider)
            <li>
                <a href="/providers/{{$provider->id}}">
                   {{$provider->name}}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="/providers/create">Create new Provider</a>

</body>
</html>
