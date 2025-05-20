<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Task</title>
</head>

<body>
    <h1>Tambah Task</h1>
    <form action="{{ route('task.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Kegiatan:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="description">Deskripsi:</label><br>
        <input type="text" id="description" name="description"><br>
        <label for="status">Pilih Status:</label>
        <select id="status" name="status">
            <option value="0">Pending</option>
            <option value="1">Done</option>
        </select>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
