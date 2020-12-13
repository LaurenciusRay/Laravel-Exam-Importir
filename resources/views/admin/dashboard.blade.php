@extends('layouts.admin')
@section('menuDashboard', 'active')
@section('content')
    
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-5">
      <h1>Welcome, Admin!</h1>
      <h4 class="text-secondary">
        Click one of the cards to view the event details
      </h4>
    </div>
  </div>

  <div class="row">
    @foreach ($event as $item)
    <div class="col-md-6">
      <div class="card" >
        <div class="card-body">
            <h5 class="card-title mb-3"><b>{{$item->event_name}}</b></h5>
            <p class="card-text">{{$item->event_description}}</p>
            <a href="{{ url('/admin/event-detail/'.$item->id) }}" class="card-link">Click here for more details</a>  
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection