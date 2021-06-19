@extends('layout.layout')

@section('main')
    <div class="main-content">
        <h1>Thêm lớp điiiii</h1>
        <form action="{{ route('class.store') }}" method="post">
            @csrf
            Tên lớp: <input type="text" name="name">
            <button>Ok</button>
        </form>
    </div>
@endsection
