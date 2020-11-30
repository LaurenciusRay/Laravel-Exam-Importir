@extends('KreasiEvent.masteradmin')
@section('title', 'Admin | Table Participant')

@section('KreasiEvent.content.Admin')
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>    
    <div class="container mt-3" id="index-participant">
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
                <table class="table table-striped" id="table_id">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Age</th>
                          <th>Email</th>
                          <th>Phone number</th>
                          <th>Profesion</th>
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
                                <td>
                                    <a href="{{route('participant.edit', $dp->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('participant.destroy', $dp->id)}}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection