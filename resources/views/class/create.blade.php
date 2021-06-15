<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thêm lớp điiiii</h1>
    <form action="{{ route('store-class') }}" method="post">
        @csrf
        Tên lớp: <input type="text" name="name">
        <button>Ok</button>
    </form>
</body>
</html>