@extends('layouts.base')
@section('content')
  <div class="jumbotron">
          <!--<h1>Series By Dave</h1>-->
          <p class="lead">{{count($notebooks)}}, published so far by {{ Auth::user()->name }}.</p>

        <div class="row ">
          <div class="col-lg-6 ">
            <form  method="POST" action="notebooks/create">
                 {{csrf_field()}}
            <div class="input-group">

              <input type="text" class="form-control" name="title" placeholder="Create new notebook">
              <span class="input-group-btn">
                <button class="btn btn-success" type="submit">Create new</button>
              </span>

            </div><!-- /input-group -->
            </form>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>

<div class="row padding-top">

  @foreach ($notebooks as $notebook)

        <div class="col-xs-6 col-lg-4">
          <h3>{{$notebook->title}}</h3>
          <p>{{$notebook->description}} </p>
          <p><a class="btn btn-primary" href="/notebooks/view/{{$notebook->id}}" role="button">View details »</a></p>
        </div><!--/.col-xs-6.col-lg-4-->

  @endforeach

      </div>

    @endsection
