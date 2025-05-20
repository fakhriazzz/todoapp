<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Task</title>
</head>

<body>
    <h1>List Task</h1>
    <a href="{{ route('task.create') }}">Tambah Task</a>
    <table>
        <tr>
            <th>Kegiatan</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($datatask as $item)
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->status == 1 ? 'Done' : 'Pending' }}</td>
            <td>
                <a href="{{ route('task.edit', $item->id) }}">Edit</a> |
                <form action="{{ route('task.delete', $item->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
