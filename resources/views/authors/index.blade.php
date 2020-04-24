@extends ('layout')

@section ('content')

<div class="container">

    <div class="row">
        <div class="col-10">
            <h1><u>All Authors</u></h1>
            
            @foreach($authors as $author)
            <h3><a href="/authors/{{ $author->id }}">{{ $author->name }}</a></h3>
            <p>Origin: {{ $author->origin }}</p>
            @endforeach
        </div>
        <div class="col-2">
            <a href="authors/create"><button  class="btn btn-primary">Add a new Author</button></a>
        </div>
    </div>
</div>


@endsection