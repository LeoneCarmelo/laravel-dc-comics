
@include('Partials.doctype')


<body class="bg-dark">
    <div class="container py-2 w-75">
        <div class="d-flex flex-column justify-content-center align-items-center">
            @include('Partials.logo')
            <h1 class="fw-bold mt-4 px-4 text-center text-white rounded-5">{{$comic->title}}</h1>
        </div>
        <div class="row mt-5 bg-info py-4 rounded-5 px-2">
            <div class="col">
                <div class="text-center">
                    <img class="img-fluid rounded-5" src="{{$comic->image}}" alt="{{$comic['title']}}">
                </div>
            </div>
            <div class="col">
                <div><strong>Title: </strong>{{$comic["title"]}}</div>
                <div>
                    <div class="description h-50 my-2"><strong>Description: </strong>{{$comic->description}}</div>
                    <div class="my-2"><strong>Price: </strong>{{$comic->price}}</div>
                    <div class="my-2"><strong>Series: </strong>{{$comic->series}}</div>
                    <div class="my-2"><strong>Sale Date: </strong>{{$comic->sale_date}}</div>
                    <div class="my-2"><strong>Type: </strong>{{$comic->type}}</div>
                </div>
            </div>
        </div>
    </div>
</body>


