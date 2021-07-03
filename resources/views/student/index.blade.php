@extends('layout.app')

@section('main')
    <div class="main-content">
        <div class="container-fluid">
            <h1>Danh sách sinh viên</h1>

            <form>
                Chọn lớp: <select name="id-class" class="form-control">
                    <option value="0">----</option>
                    @foreach ($listClassroom as $classroom)
                        <option value="{{ $classroom->id }}" @if ($classroom->id == $idClass) selected @endif>{{ $classroom->name }}</option>
                    @endforeach
                </select>
                <button>Ok</button>
            </form>

            <a href="{{ route('student.insert-by-excel') }}" class="btn btn-default">Thêm bằng excel</a>

            <a href="{{ route('student.export-excel') }}" class="btn btn-primary">Tải danh sách sinh viên</a>
            <div class="card card-plain">
                <div class="content table-responsive table-full-width">
                    <form class="navbar-search-form" role="search">
                        <div class="input-group">
                            <input type="text" name="search" value="{{ $search }}" class="form-control"
                                placeholder="Search...">
                            <span class="input-group-addon"><button><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Lớp</th>
                        </thead>
                        <tbody>
                            @foreach ($listStudent as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->GenderName }}</td>
                                    <td>{{ $student->dateBirth }}</td>
                                    <td>{{ $student->idClass }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Hiển thị phân trang --}}
                    {{ $listStudent->appends(['search' => $search])->links('pagination::semantic-ui') }}
                </div>
            </div>
        </div>
    </div>
@endsection
