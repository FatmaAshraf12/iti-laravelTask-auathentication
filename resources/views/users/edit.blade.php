@extends('./../layout')

@section('content')
    <form class="w-50 m-auto create" action="{{ route('users.update', $user->id) }}" method="POST">
        <h4>Edit User</h4>

        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $user->name }}"
                name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                value="{{ $user->email }}" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
