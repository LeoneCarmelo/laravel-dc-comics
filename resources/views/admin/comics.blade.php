<header>
    <div class="container">
        <h1>Admin Page</h1>
    </div>
</header>

<main>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr class="">
                    <td scope="row">{{$comic['id']}}</td>
                    <td>{{$comic["title"]}}</td>
                    <td>{{$comic->description}}</td>
                    <td>
                        <img class="img-fluid" src="{{$comic->image}}" alt="{{$comic['title']}}"></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</main>