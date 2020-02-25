@extends('layouts.main')

@section('content')

<div class="form">
    <div class="forminput">

        <form method="POST" action="/posts/create">
            @csrf

          


            <div class="form-group">
                <label for="title">Tytuł</label>
                <input name="title" type="text" class="form-control" id="title" required>
            </div>

            <div class="form-group">
                <label for="body">Zawartość</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <input type="submit" class="btn btn-dark btn-lg" value="Opublikuj!">

        </form>
       

    </div>
    @include ('layouts.error')
</div>


@endsection