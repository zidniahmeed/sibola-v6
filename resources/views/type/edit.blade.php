@extends('layout.main')
@section('title', 'Edit type')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="post" action="/update-type/{{ $data->id }}">
                @csrf
                <div class="form-group mb-5">
                    <label>type</label>
                    <input type="text" class="form-control" value="{{ $data->name }}" name="name" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection