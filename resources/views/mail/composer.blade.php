@extends('layouts.app')
@section('content')
<div class="row">

  <div class="col-md-5">
    <form class="" action="{{url('mail/post')}}" method="post">

      {{csrf_field()}}

      <div class="form-group">
       
       <label class="mdl-textfield__label" for="ff_to">To</label>
       <input class="form-control" type="text" name="to" id="ff_to">
     </div>

      <div class="form-group">
      
       <label class="mdl-textfield__label" for="ff_subject">Subject</label>
        <input class="form-control" type="text" name="subject" id="ff_subject">


     <div class="form-group">
       
        <label class="mdl-textfield__label" for="ff_message">Message</label>
          <textarea class="form-control" cols="10" type="text" name="message" rows="1" id="ff_message"></textarea>
      </div>

      <button class="btn btn-success">
        Send
      </button>

    </form>
  </div>

</div>

@endsection
