@extends('layouts.main')
@section('content')

<div class="form">
    <div class="forminput">

        <form method="POST" action="/register">
            @csrf

            <div class="form-group">
                <label for="name">Nazwa użytkownika</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"  required>
            </div>

            <div class="form-group">
                <label for="password">Hasło</label>
                <input type="password" class="form-control" id="password" name="password"  required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Hasło</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>


            <input type="submit" class="btn btn-dark btn-lg" value="Zarejestruj!">

        </form>
        

    </div>
    @include ('layouts.error')
</div>
@endsection