@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-6">
    

    <div class="panel panel-default">

<div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">

    <form class="" action="{{route('new-contact')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="">First Name</label>
        <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}">

    </div>
    <div class="form-group">
      <label for="">Last Name</label>
        <input class="form-control" type="text" name="last_name" value="{{old('last_name')}}">

    </div>
    <div class="form-group">
      <label for="">Description</label>
        <textarea class="form-control" type="text" name="description" >{{old('description')}}</textarea>

    </div>
    <div class="form-group">
      <button class="btn btn-success " type="submit" >Create</button>
    </div>
  </form>

  </div>
</div>

  </div>
</div>





@endsection
