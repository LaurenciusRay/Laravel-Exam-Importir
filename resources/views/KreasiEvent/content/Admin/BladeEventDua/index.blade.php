@extends('KreasiEvent.masteradmin')
@section('title', 'Admin | Table Event Dua')

@section('KreasiEvent.content.Admin')
    <div class="container ctn-index" id="index-eventdua">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2 id="h2-create">Tabel Data Event</h2>
                    <h2 id="h2-create">Kreasi Cipta Event</h2>
                </div>
                <a href="{{route('eventdua.create')}}"><button class="btn btn-success">Tambah Data</button></a>
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
                          <th>Event Name</th>
                          <th>Event Category</th>
                          <th>Event Location</th>
                          <th>Event Date</th>
                          <th>Event Description</th>
                          <th>Action</th>
                        </tr>               
                    </thead>

                    <tbody>
                        
                        @forelse ($data_events as $de)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $de->id }}</td>
                                <td>{{ $de->event_names }}</td>
                                <td>{{ $de->event_categorys }}</td>
                                <td>{{ $de->event_locations }}</td>
                                <td>{{ $de->event_dates }}</td>
                                <td>{{ $de->event_descriptions }}</td>
                                <td>
                                    <a href="{{route('eventdua.edit', $de->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('eventdua.destroy', $de->id)}}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection