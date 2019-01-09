@extends('layouts/app'); 
@section('content')
<h1>Create post</h1>
<form action="{{route('posts.store')}}" method="POST">
   {{ csrf_field() }}

   <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" class="form-control" placeholder="Title">
   </div>
   <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" id="body" name="body" class="form-control" placeholder="Body Text"></textarea>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection