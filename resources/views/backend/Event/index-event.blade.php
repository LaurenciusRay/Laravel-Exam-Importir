@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Dasboard Admin')

@section('backend')
    <br>
    <br>
    <h1 id="ftd">Table Event</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-admin') }}" class="btn btn-primary" style="border-radius: 5rem">Kembali Halaman Admin</a>
        <a href="{{ route('event.create') }}" class="btn btn-warning" style="border-radius: 5rem">Tambah Data</a>
        <br>
        <br>

        @if (session()->has('validasi'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('validasi') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ Session::get('sukses') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered ftd">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Event Category</th>
                            <th scope="col">Event Location</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Event Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->event_name }}</td>
                                <td>{{ $d->event_category }}</td>
                                <td>{{ $d->event_location }}</td>
                                <td>{{ $d->event_date }}</td>
                                <td>{{ $d->event_description }}</td>
                                <td>
                                    <a href="{{ route('event.edit', $d->id) }}" class="btn btn-warning"
                                        style="border-radius: 5rem">EDIT</a>
                                    <form action="{{ route('event.destroy', $d->id) }}" class="d-inline" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger"
                                            onclick="return confirm('ANDA YAKIN INGIN MENGHAPUS ?')"
                                            style="border-radius: 5rem">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
