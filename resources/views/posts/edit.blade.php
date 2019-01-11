@extends('layouts/app')
@section('content')
<h1>Edit post</h1>
<form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
   {{csrf_field()}}
   {{-- {{method_field('PUT')}} --}}


   <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" value="{{$post->title}}" name="title" class="form-control" placeholder="Title">
   </div>
   <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" name="body" id="article-ckeditor" name="body" class="form-control" placeholder="Body Text">{{$post->body}}</textarea>
   </div>
   <div class="form-group">
      <input type="file" id="title" name="cover_image" class="form-control" placeholder="Title">
   </div>
   <input type="hidden" name="_method" value="PUT">
   <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection