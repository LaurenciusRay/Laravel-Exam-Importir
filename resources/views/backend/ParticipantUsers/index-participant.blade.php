@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Dasboard Admin')

@section('backend')
    <br>
    <br>
    <h1 id="ftd">Table Participant User</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-admin') }}" class="btn btn-primary" style="border-radius: 5rem">Kembali Halaman Admin</a>
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
                            <th scope="col">Full Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Profesion</th>
                            <th scope="col">Event 1</th>
                            <th scope="col">Event 2</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->full_name }}</td>
                                <td>{{ $d->age }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->phone_number }}</td>
                                <td>{{ $d->profesion != null ? $d->profesion : '-' }}</td>
                                <td>{{ $d->Event != null ? $d->Event->event_name : '-' }}</td>
                                <td>{{ $d->Events != null ? $d->Events->event_names : '-' }}</td>
                                <td>
                                    <form action="{{ route('destroy-participant', $d->id) }}" class="d-inline"
                                        method="POST">
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
