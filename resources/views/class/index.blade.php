@extends('layout.app')

@section('main')
    <div class="main-content">
        <div class="container-fluid">
            <h1>Danh sách lớp</h1>

            <a href="{{ route('class.create') }}">Thêm</a>
            <div class="card card-plain">
                <div class="content table-responsive table-full-width">
                    <form class="navbar-search-form" role="search">
                        <div class="input-group">
                            <input type="text" name="search" value="{{ $c2VhcmNo }}" class="form-control"
                                placeholder="Search...">
                            <span class="input-group-addon"><button><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </thead>
                        <tbody>
                            @foreach ($listClassroom as $classroom)
                                <tr>
                                    <td>{{ $classroom->id }}</td>
                                    <td>{{ $classroom->name }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('class.show', $classroom->id) }}">
                                            Xem
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('class.edit', $classroom->id) }}">
                                            Sửa
                                        </a>
                                    </td>
                                    <td>
                                        {{-- <form action="{{ route('class.hide', $classroom->id) }}" method="post">
                                            @csrf
                                            @method("PATCH")
                                            <button class="btn btn-primary">Xóa</button>
                                        </form> --}}
                                        <a class="btn btn-primary" href="{{ route('class.hide', $classroom->id) }}">
                                            Ẩn
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Hiển thị phân trang --}}
                    {{ $listClassroom->appends(['search' => $c2VhcmNo])->links('pagination::semantic-ui') }}
                </div>
            </div>
        </div>
    </div>
@endsection
