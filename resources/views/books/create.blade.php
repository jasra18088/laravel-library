@extends ('layout')

@section ('content')

    <h1>New Book</h1>

    <form method="POST" action="/books">
        @csrf

        <div class="form-group">
            <label  for="title">Title</label>

            <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <textarea class="form-control" name="description" id="description"></textarea>
        </div>

        <div class="field">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

@endsection