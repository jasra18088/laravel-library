@extends ('layout')

@section ('content')

<h1>New Book</h1>

<form method="POST" action="/books">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>

        <input class="form-control {{ $errors->has('title') ? 'border-danger' : ''}}" type="text" name="title" id="title" value="{{ old('title') }}">

        @if ($errors->has('title'))
        <p class="text-danger">{{ $errors->first('title') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>

        <textarea class="form-control {{ $errors->has('description') ? 'border-danger' : ''}}" name="description" id="description">{{ old('description') }}</textarea>

        @if ($errors->has('description'))
        <p class="text-danger">{{ $errors->first('description') }}</p>
        @endif
    </div>

    <div class="field">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>

@endsection