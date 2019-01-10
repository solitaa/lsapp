@extends('layouts/app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:200px;">

<div>
   {!!$post->body!!}
</div>
<br>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

<br>
<br>
   @if(!Auth::guest())
      @if(AUth::user()->id == $post->user_id)
         <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
         <form action="/posts/{{$post->id}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      @endif
   @endif
@endsection


<!doctype html>
<html lang="{{ app()->getLocale() }}">
