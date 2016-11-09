@extends('layouts.base')

@section('content')
<form method="POST" class="col-md-6 col-lg-6" style="margin-top: 50px;" action="/notebooks/edit/{{$notebook->id}}">
       {{csrf_field()}}
       {{method_field('PUT')}}
  <div class="form-group">
    <label for="email">Title</label>
    <input type="text" value="{{$notebook->title}}" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="pwd">Description:</label>
    <textarea rows="5" value="{{$notebook->description}}"class="form-control" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   @endsection
