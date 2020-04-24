@extends ('layout')

@section ('content')

<h3>{{ $book->title }}</h3>
<p>{{ $book->description }}</p>

<a href="{{ $book->id }}/edit"><button>Edit Book</button></a>

@endsection