<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
</head>

<body>
    <h1>laravel-model-controller</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie->title }}
            </li>
    </ul>
    @endforeach
</body>

</html>
