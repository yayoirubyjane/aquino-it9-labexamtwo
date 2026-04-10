
@extends('students.layout')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 600px;">
    <div class="card-header bg-primary text-white"><h5 class="mb-0">Add New Student</h5></div>
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            @include('students._form')
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Save Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection