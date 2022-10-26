@extends('./../layouts/app')

@section('content')
    <div class="container">
        <table class="table table-bordered text-center">
            <thead class="table" style="background-color: #e9e9e9">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @can('super')
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            @endcan

                            <form action="{{ route('users.edit', $user->id) }}">
                                <button class="btn btn-success">Edit</button>
                            </form>
                            <form action="{{ route('users.show', $user->id) }}">

                                <button class="btn btn-primary">Show</button>
                            </form>


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
