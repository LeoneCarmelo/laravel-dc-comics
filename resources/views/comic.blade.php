
@include('Partials.doctype')


<body class="bg-dark">
    <div class="container py-4 w-75">
        <div class="d-flex justify-content-center align-items-center gap-3">
            @include('Partials.logo')
            <h1 class="fw-bold py-3 text-center text-white">View</h1>
        </div>
        <div class="row mt-5 bg-info py-4 rounded-5">
            <div class="col">
                <div class="text-center">
                    <img class="img-fluid" src="{{$comic->image}}" alt="{{$comic['title']}}">
                </div>
            </div>
            <div class="col">
                <div><strong>Title: </strong>{{$comic["title"]}}</div>
                <div>
                    <div class="description h-50 my-2"><strong>Description: </strong>{{$comic->description}}</div>
                    <div class="my-2"><strong>Price: </strong>{{$comic->price}}</div>
                    <div class="my-2"><strong>Series: </strong>{{$comic->series}}</div>
                    <div class="my-2"><strong>Sale Date </strong>{{$comic->sale_date}}</div>
                    <div class="my-2"><strong>Type: </strong>{{$comic->type}}</div>
                </div>
            </div>
        </div>
    </div>
</body>


