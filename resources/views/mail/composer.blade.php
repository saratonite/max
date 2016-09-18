@extends('layouts.app')
@section('content')
<div class="mdl-grid">

  <div class="mdl-cell mdl-cell--12-col">
    <form class="" action="{{url('mail/post')}}" method="post">

      {{csrf_field()}}

      <div class="mdl-textfield mdl-js-textfield">
       <input class="mdl-textfield__input" type="text" name="to" id="ff_to">
       <label class="mdl-textfield__label" for="ff_to">To</label>
     </div>

      <div class="mdl-textfield mdl-js-textfield">
       <input class="mdl-textfield__input" type="text" name="subject" id="ff_subject">
       <label class="mdl-textfield__label" for="ff_subject">Subject</label>
     </div>


     <div class="mdl-textfield mdl-js-textfield">
        <textarea class="mdl-textfield__input" cols="10" type="text" name="message" rows="1" id="ff_message"></textarea>
        <label class="mdl-textfield__label" for="ff_message">Message</label>
      </div>

      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Send
      </button>

    </form>
  </div>

</div>

@endsection
