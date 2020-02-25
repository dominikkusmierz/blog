@extends('layouts.main')

@section('content')

<div class="form">

    <div class="post">

        <h1>{{$post->title}}</h1>
        <small>
            by
            <b>{{$post->user->name}}
            </b>,
            {{$post->created_at->locale('pl_PL')->diffForHumans()}}
        </small> <br />

        {{$post->body}}
        
        @if(Auth::check()&&Auth::User()->name==$post->user->name)
        <br />
        <small style="color:red;float:right;">
            <a href="/posts/delete/{{$post->id}}">
                Usuń
            </a>
        </small>
        @endif
        
        <hr />
        <small style="float:left;">Komentarze: </small>
        <br />
        @foreach($post->comments as $comment)
        <li class='list-group-item'>
            <small>
                {{$comment->created_at->locale('pl_PL')->diffForHumans()}} by <b>{{$comment->user->name}}</b>
                : {{$comment->body}}
            </small>

        </li>
        @endforeach

        <hr/>
        <form action='/posts/{{$post->id}}/comments' method="POST">
            @csrf
        <div class="form-group">
            
            <label for="comment">Dodaj komentarz</label>
            <textarea name="body" id="body" class="form-control"></textarea>
            <input type="submit" class="btn btn-dark btn-lg" value="Wyślij!">
        </div>
    </form>
        </div>

    <hr />

</div>
@include('layouts.error');
@endsection