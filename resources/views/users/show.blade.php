@extends('./../layout')

@section('content')
    <form class="w-50 m-auto create">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $user->name }}"
                name="name" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                value="{{ $user->email }}" name="email" readonly>
        </div>
    </form>
@endsection
