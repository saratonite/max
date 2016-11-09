@extends('layouts.app')


@section('content')
<div class="">

  <h3>Contacts</h3>
  <!-- Loop through contacts -->
  <div class="row">
    @forelse($contacts as $contact)
    <div class="col-md-4">
      <div class="panel panel-default ">
        <div class="panel-heading">{{str_limit($contact->first_name.$contact->last_name,40)}}</div>
        <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img style="width:64px;" class="media-object" src="{{url('images/candle.png')}}" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                {{$contact->description}}
              </div>
            </div>
          
        </div>
      </div>
      
    </div>
    


  @empty

    <p>
      No Contacts
    </p>

  @endforelse


  </div>

  {{ $contacts->links() }}
  <!-- End Contact loop -->
</div>
@endsection
