@extends('layout.app')

@section('main')
    <div class="main-content">
        <div class="container-fluid">
            <h1>Demo select</h1>

            Chọn lớp: <select id="id-class" class="form-control">
                <option value="0">----</option>
                @foreach ($listClassroom as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                @endforeach
            </select>
            Chọn sinh viên: <select id="id-student" class="form-control">

            </select>
        </div>
    </div>
@endsection
