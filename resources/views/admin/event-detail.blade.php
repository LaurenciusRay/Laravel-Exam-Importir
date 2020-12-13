@extends('layouts.admin')
@section('content')
    
   <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto"> Event : {{$event->event_name}}</h1>
                </div>
                <hr>
              
                <h4 class="mb-3">Description : <br> {{$event->event_description}} </h4>

                <ul>
                    <li>Location: {{$event->event_location}}</li>
                    <li>Date: {{$event->event_date}}</li>
                    <li>Category : {{$event->event_category}}</li>
                    <li>
                        Participant: <br> <a href="/admin/participant" class="btn btn-primary">Participant list</a>
                    </li>
                </ul>
            </div>
        </div>

   </div>

@endsection