@include('Partials.doctype')

<body>
<div class="container py-4">
    <h1 class="text-center">Add new Comic</h1>

    <form action="{{route('comic.store')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" aria-describedby="helpId"  value="{{old('title')}}">
      <small id="helpId" class="text-muted">Type the title of the comic you want to add.</small>
      @error('title')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" aria-describedby="helpId"  value="{{old('description')}}">
      <small id="helpId" class="text-muted">Type the description of the comic.</small>
      @error('description')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image</label>
      <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Http://" aria-describedby="helpId"  value="{{old('thumb')}}">
      <small id="helpId" class="text-muted">Type the Images's path of the comic.</small>
      @error('thumb')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" aria-describedby="helpId"  value="{{old('price')}}">
      <small id="helpId" class="text-muted">Type the prics of the comic.</small>
      @error('price')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Series" aria-describedby="helpId"  value="{{old('series')}}">
      <small id="helpId" class="text-muted">Type the series of the comic.</small>
      @error('series')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Sale_date" aria-describedby="helpId"  value="{{old('sale_date')}}">
      <small id="helpId" class="text-muted">Type the sale's date of the comic.</small>
      @error('sale_date')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="type" aria-describedby="helpId"  value="{{old('type')}}">
      <small id="helpId" class="text-muted">Type the type of the comic.</small>
      @error('type')
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$message}}
        </div>
      @enderror
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
</div>
</body>