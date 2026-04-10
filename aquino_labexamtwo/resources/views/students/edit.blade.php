
@extends('students.layout')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 600px;">
    <div class="card-header bg-warning"><h5 class="mb-0">Edit Student</h5></div>
    <div class="card-body">
        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf @method('PUT')
            @include('students._form')
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning">Update Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection