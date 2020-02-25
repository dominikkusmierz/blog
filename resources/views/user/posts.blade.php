@extends('layouts.main')

@section('content')

<div class="form">

    <div class="post">

        @foreach($posts as $post)
        <h1>
            <a href='/posts/{{$post->id}}'>
                {{$post->title}}
            </a>
        </h1>
        <small>
            by  
            <b>
                {{$post->user->name}}
            </b>,
            {{$post->created_at->locale('pl_PL')->diffForHumans()}}
        </small> <br />

        {{$post->body}}
        <hr />
        @endforeach
    </div>

</div>

@endsection