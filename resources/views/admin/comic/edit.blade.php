@include('Partials.doctype')

<body>
  <div class="container py-4">
    <div class="d-flex justify-content-center align-items-center gap-3">
      @include('Partials.logo')
      <h1 class="fw-bold py-3 text-center fw-bold">Edit</h1>
    </div>
    <form action="{{route('comic.update', $comic->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId" value="{{$comic->title}}">
        <small id="helpId" class="text-muted">Type the title of the comic you want to add.</small>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Description" aria-describedby="helpId" value="{{$comic->description}}">
        <small id="helpId" class="text-muted">Type the description of the comic.</small>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Image</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Http://" aria-describedby="helpId" value="{{$comic->image}}">
        <small id="helpId" class="text-muted">Type the Images's path of the comic.</small>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Price" aria-describedby="helpId" value="{{$comic->price}}">
        <small id="helpId" class="text-muted">Type the prics of the comic.</small>
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" name="series" id="series" class="form-control" placeholder="Series" aria-describedby="helpId" value="{{$comic->series}}">
        <small id="helpId" class="text-muted">Type the series of the comic.</small>
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Sale_date" aria-describedby="helpId" value="{{$comic->sale_date}}">
        <small id="helpId" class="text-muted">Type the sale's date of the comic.</small>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" name="type" id="type" class="form-control" placeholder="type" aria-describedby="helpId" value="{{$comic->type}}">
        <small id="helpId" class="text-muted">Type the type of the comic.</small>
      </div>

      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</body>