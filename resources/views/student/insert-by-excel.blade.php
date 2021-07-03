@extends('layout.app')

@section('main')
    <div class="main-content">
        <div class="container-fluid">
            <h1>Thêm bằng excel</h1>

            <form action="{{ route('student.insert-by-excel-process') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="customFile">Trong file excel có các cột Họ Tên, Email, Giới tính, Ngày
                        sinh, Lớp</label>
                    <input type="file" name="excel" class="form-control"
                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                </div>
                <button>Ok</button>
            </form>
        </div>
    </div>
@endsection
