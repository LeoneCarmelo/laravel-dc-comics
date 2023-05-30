<div class="container">
    <h1>Add new Comic</h1>

    <form action="{{route('index.store')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="title" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Type the name of the comic you want to add.</small>
    </div>
    </form>
</div>