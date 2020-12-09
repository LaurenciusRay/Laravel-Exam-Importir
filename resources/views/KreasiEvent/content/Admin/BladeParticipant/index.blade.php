@extends('KreasiEvent.masteradmin')
@section('title', 'Admin | Table Participant')

@section('KreasiEvent.content.Admin')
    <div class="container ctn-participantadmin" id="index-participant">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Participant</h2>
                    <h2 id="h2-create">Kreasi Cipta Event</h2>
                </div>
                @if (session()->has('validasi'))
                        <div class="alert alert-success">
                            {{ session()->get('validasi') }}
                        </div>
                @endif
                @if (Session::has('sukses'))
                        <div class="alert alert-success">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                @endif
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Age</th>
                          <th>Email</th>
                          <th>Phone number</th>
                          <th>Profesion</th>
                          <th>Event 1</th>
                          <th>Event 2</th>
                          <th>action</th>
                        </tr>               
                    </thead>

                    <tbody>
                        
                        @forelse ($data_participant as $dp)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $dp->id }}</td>
                                <td>{{ $dp->full_name }}</td>
                                <td>{{ $dp->age }}</td>
                                <td>{{ $dp->email }}</td>
                                <td>{{ $dp->phone_number }}</td>
                                <td>{{ $dp->profesion }}</td>
                                <td>{{ $dp->Event != null ? $dp->Event->event_name : '-' }}</td>
                                <td>{{ $dp->Event_dua != null ? $dp->Event_dua->event_names : '-' }}</td>
                                <td>
                                    <form action="{{route('participant.destroy', $dp->id)}}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection