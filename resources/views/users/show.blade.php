@extends ('layout')

@section ('content')

<h3>{{ $user->name }}</h3>
<p>{{ $user->email }}</p>

<a href="{{ $user->id }}/edit" >
    <button class="btn btn-primary">Edit User</button>
</a>

@endsection