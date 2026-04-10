
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="mb-3">
    <label class="form-label">Student ID</label>
    <input type="text" name="student_id" class="form-control @error('student_id') is-invalid @enderror"
           value="{{ old('student_id', $student->student_id ?? '') }}">
    @error('student_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="row mb-3">
    <div class="col">
        <label class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
               value="{{ old('first_name', $student->first_name ?? '') }}">
        @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col">
        <label class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
               value="{{ old('last_name', $student->last_name ?? '') }}">
        @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
           value="{{ old('email', $student->email ?? '') }}">
    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Course</label>
    <input type="text" name="course" class="form-control @error('course') is-invalid @enderror"
           value="{{ old('course', $student->course ?? '') }}">
    @error('course')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Year Level</label>
    <select name="year_level" class="form-select @error('year_level') is-invalid @enderror">
        <option value="">-- Select Year --</option>
        @for($i = 1; $i <= 5; $i++)
            <option value="{{ $i }}" {{ old('year_level', $student->year_level ?? '') == $i ? 'selected' : '' }}>
                Year {{ $i }}
            </option>
        @endfor
    </select>
    @error('year_level')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>