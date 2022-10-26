@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Login</h3>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password"
                        required autocomplete="current-password">
                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection



<style>
    .form-container {
        width: 37%;
        margin: auto;
        margin-top: 30px;
        background-color: #daeaff;
        padding: 53px 29px;
        border-radius: 12px;
        text-align: center
    }

    .form-group {
        text-align: left;
    }

    .form-group {
        text-align: left;
    }

    button {
        width: 150px;
    }

    .form-container h3 {
        margin-bottom: 30px
    }

    p.error {
        color: red;
        font-size: 13px;
        font-style: italic;
    }
</style>
