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
<div>
    <div class="container">
        <h1 class="fw-bold py-3 text-center">Admin Page</h1>
        <a class="btn btn-primary my-2 text-left" href="{{route('comic.create')}}" role="button">Add</a>
    </div>
</div>

<main class="container">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr class="">
                    <td scope="row">{{$comic['id']}}</td>
                    <td>{{$comic["title"]}}</td>
                    <td>
                        <div class="description">{{$comic->description}}</div>
                    <td>
                        <img class="img-fluid" src="{{$comic->image}}" alt="{{$comic['title']}}">
                    </td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td class="">
                        <a class="btn btn-primary" href="{{route('comic.show', $comic->id)}}" role="button">View</a>
                        <a class="btn btn-secondary my-2" href="{{route('comic.edit', $comic->id)}}" role="button">Edit</a>
                        <form action="{{route('comic.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</main>

</body>

</html>
