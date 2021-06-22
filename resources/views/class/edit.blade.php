@extends('layout.app')

@section('main')
    <div class="main-content">
        <div class="card">
            <div class="header">Sửa lớp điiiii</div>
            <div class="content">
                <form action="{{ route('class.update', $classroom->id) }}" method="post">
                    @method("PUT")
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" name="name" value="{{ $classroom->name }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-fill btn-info">Cật nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
