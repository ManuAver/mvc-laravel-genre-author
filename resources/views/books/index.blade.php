<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>${{ $book->price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
