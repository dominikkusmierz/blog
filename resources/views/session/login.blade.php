@extends('layouts.main')
@section('content')

<div class="form">
    <div class="forminput">

        <form method="POST" action="/login">
            @csrf

          


            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Hasło</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>

            <input type="submit" class="btn btn-dark btn-lg" value="Zaloguj!!">

        </form>
       

    </div>
    @include ('layouts.error')
</div>
@endsection