@extends('layouts.app')

@section('content')

  <h1>New Contact</h1>

  <form class="" action="{{route('new-contact')}}" method="post">
    {{csrf_field()}}
    <div class="">
      <label for="">First Name</label>
        <input type="text" name="first_name" value="{{old('first_name')}}">

    </div>
    <div class="">
      <label for="">Last Name</label>
        <input type="text" name="last_name" value="{{old('last_name')}}">

    </div>
    <div class="">
      <label for="">Description</label>
        <textarea type="text" name="description" >{{old('description')}}</textarea>

    </div>
    <div class="">
      <button type="submit" >Submit</button>
    </div>
  </form>

@endsection
