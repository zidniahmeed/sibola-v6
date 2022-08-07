@extends('layout.main')
@section('title', 'Create type')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="post" action="/store-type">
                @csrf
                <div class="form-group mb-5">
                    <label>type</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection