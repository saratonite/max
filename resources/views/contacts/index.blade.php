@extends('layouts.app')


@section('content')
<div class="">

  <h3>Contacts</h3>
  <!-- Loop through contacts -->
  <div class="mdl-grid">

    @foreach($contacts as $contact)

    <div class="mdl-cell mdl-cell--4-col">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
          <h2 class="mdl-card__title-text">{{$contact->first_name}} {{$contact->last_name}}</h2>
        </div>
        <div class="mdl-card__supporting-text">
          {{$contact->description}}
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            View
          </a>
        </div>
      </div>
    </div>

    @endforeach

  </div>


  <!-- End Contact loop -->
</div>
@endsection
