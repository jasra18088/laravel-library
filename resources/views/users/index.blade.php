@extends ('layout')

@section ('content')

<div class="container">

    <div class="row">
        <div class="col-10">
            <h1><u>All Users</u></h1>
            
            @foreach($users as $user)
            <h3><a href="/users/{{ $user->id }}">{{ $user->name }}</a></h3>
            <p>{{ $user->email }}</p>
            @endforeach
        </div>
        <div class="col-2">
            <a href="users/create"><button  class="btn btn-primary">Add a new User</button></a>
        </div>
    </div>
</div>


@endsection