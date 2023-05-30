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
<div class="container py-4">
    <h1 class="text-center">Add new Comic</h1>

    <form action="{{route('comic.store')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the title of the comic you want to add.</small>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Description" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the description of the comic.</small>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image</label>
      <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Http://" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the Images's path of the comic.</small>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" name="price" id="price" class="form-control" placeholder="Price" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the prics of the comic.</small>
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" id="series" class="form-control" placeholder="Series" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the series of the comic.</small>
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Sale_date" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the sale's date of the comic.</small>
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" id="type" class="form-control" placeholder="type" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the type of the comic.</small>
    </div>

    <div class="d-grid gap-2">
      <button type="button"  class="btn btn-primary">Save</button>
    </div>
    </form>
</div>
</body>