@include('Partials.doctype')

<body class="bg-dark">
    <div>
        <div class="container py-4">
            <div class="d-flex justify-content-center align-items-center gap-3">
                @include('Partials.logo')
                <h1 class="fw-bold py-3 text-center text-white">Admin</h1>
            </div>
            <a class="btn btn-primary my-2 text-left text-uppercase fw-bold" href="{{route('comic.create')}}" role="button">Add</a>
            @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{session('message')}}</strong>
            </div>
            @endif
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
                        <td>
                            <a class="btn btn-primary" href="{{route('comic.show', $comic->id)}}" role="button">View</a>
                            <a class="btn btn-secondary my-2" href="{{route('comic.edit', $comic->id)}}" role="button">Edit</a>
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">
                                Delete
                            </button>
                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modal-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle-{{$comic->id}}">Delete {{$comic->name}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('comic.destroy', $comic->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
