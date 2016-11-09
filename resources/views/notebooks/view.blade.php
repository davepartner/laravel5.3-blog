@extends('layouts.base')
@section('content')
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title" style="font-size: 30px;">{{$notebook['title']}}</h1>
        <p class="lead blog-description">{{$notebook['created_at']}}</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
          {{$notebook['description']}}  </div><!-- /.blog-post -->



          <!-- <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">Title</h4>
              <p class="list-group-item-text">Description</p>
            </a>
        </div> -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

          <div class="sidebar-module ">
            <h4>Actions</h4>
            <ul class="nav nav-pills nav-stacked nav-primary">
              <li><a href="/notebooks/edit/{{$notebook->id}}">Edit</a></li>
              <li><a href="/notebooks/delete/{{$notebook->id}}">Delete</a></li>
            </ul>
          </div>



        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
