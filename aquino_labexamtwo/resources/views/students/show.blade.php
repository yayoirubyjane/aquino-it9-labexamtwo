
@extends('students.layout')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-header bg-info text-white"><h5 class="mb-0">Student Details</h5></div>
    <div class="card-body">
        <p><strong>Student ID:</strong> {{ $student->student_id }}</p>
        <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Course:</strong> {{ $student->course }}</p>
        <p><strong>Year Level:</strong> Year {{ $student->year_level }}</p>
    </div>
    <div class="card-footer d-flex gap-2">
        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection