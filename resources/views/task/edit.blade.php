<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Task</title>
</head>

<body>
    <h1>Tambah Task</h1>
    <form action="{{ route('task.update', $datatask->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label for="name">Kegiatan:</label><br>
        <input type="text" id="name" name="name" value="{{ $datatask->name }}"><br>
        <label for="description">Deskripsi:</label><br>
        <input type="text" id="description" name="description" value="{{ $datatask->description }}"><br>
        <label for="status">Pilih Status:</label>
        <select id="status" name="status" value="{{ $datatask->status }}">
            <option value="0">Pending</option>
            <option value="1">Done</option>
        </select>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
