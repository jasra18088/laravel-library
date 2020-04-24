@extends ('layout')

@section ('content')

<div class="container">

    <div class="row">
        <div class="col-10">
            <h1><u>Available Books</u></h1>
            
            @foreach($books as $book)
            <h3><a href="/books/{{ $book->id }}">{{ $book->title }}</a></h3>
            <p>{{ $book->description }}</p>
            @endforeach
        </div>
        <div class="col-2">
            <a href="books/create"><button  class="btn btn-primary">Add a new Book</button></a>
        </div>
    </div>
</div>


@endsection