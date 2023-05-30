<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('Partials.header')
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img class="img-fluid" src="{{$comic->image}}" alt="{{$comic['title']}}">
                </div>
            </div>
            <div class="col">
                <div><strong>Title: </strong>{{$comic["title"]}}</div>
                <div>
                    <div class="description h-50 my-2"><strong>Description: </strong>{{$comic->description}}</div>
                    <div><strong>Price: </strong>{{$comic->price}}</div>
                    <div><strong>Series: </strong>{{$comic->series}}</div>
                    <div><strong>Sale Date </strong>{{$comic->sale_date}}</div>
                    <div><strong>Type: </strong>{{$comic->type}}</div>
                </div>
            </div>
        </div>

</body>

</html>