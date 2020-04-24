@extends ('layout')

@section ('content')

<h3>{{ $author->name }}</h3>
<p>Origin: {{ $author->origin }}</p>

<a href="{{ $author->id }}/edit" >
    <button class="btn btn-primary">Edit Author</button>
</a>

@endsection