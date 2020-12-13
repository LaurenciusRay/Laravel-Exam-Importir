@extends('layouts.admin')
@section('menuParticipant', 'active')
@section('content')
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <h2>Tabel data Peserta</h2>
                </div>


                <table id="myTable" class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>E-mail</th>
                        <th>Phone Number</th>
                        <th>Profesion</th>
                        <th>Event(s)</th>
                    </thead>
                    <tbody>
                        @forelse ($participant as $item)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>{{$item->profesion == '' ? 'N/A' : $item->profesion}}</td>
                            <td>
                                @foreach ($item->event as $events)
                                    {{ "$events->event_name, " }}
                                @endforeach
                            </td>
                        </tr>
                        @empty
                            <td colspan="9" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection