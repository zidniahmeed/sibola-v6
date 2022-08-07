@extends('layout.main')
@section('title','tag')
@section('heading','Tag')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session::get('success') }}</strong>
</div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <a href="/create-tag" class="btn btn-primary">tambah data</a>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama tag</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="/show-tag/{{ $item->id }}" class="btn btn-warning">edit</a>
                        <a href="/destroy-tag{{ $item->id }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection