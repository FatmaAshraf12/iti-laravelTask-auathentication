@extends('./../layout')

@section('content')
    <form class="w-50 m-auto create" action="{{ route('users.store') }}" method="POST">
        <h4>Add User</h4>

        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" minlength="6" aria-describedby="passwordHelp"
                name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
