@extends('layouts/app')
@section('content')
<h1>Create post</h1>
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
   {{ csrf_field() }}

   <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" class="form-control" placeholder="Title">
   </div>
   <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" id="article-ckeditor" name="body" class="form-control" placeholder="Body Text"></textarea>
   </div>
   <div class="form-group">
      <input type="file" id="title" name="cover_image" class="form-control" placeholder="Title">
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection