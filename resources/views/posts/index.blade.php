@extends('layouts.main')

@section('content')

<div class="form">


    {{-- Posty --}}
    @foreach($posts as $post)

        <div class="post">

            <h1>
                <a href='/posts/{{$post->id}}'> {{$post->title}}</a>
            </h1>


            <small>
                <b>{{$post->user->name}} </b>, {{$post->created_at->locale('pl_PL')->diffForHumans()}}
            </small> 
            <br />

            {{$post->body}}


            <hr />
        </div>
    @endforeach


</div>

@endsection