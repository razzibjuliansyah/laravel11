<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Projects</title>
    <style>
        body { font-family: Arial, sans-serif; color: #000; font-size: 12px; }
        h2 { font-weight: bold; margin-bottom: 15px; text-align: left; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 6px 8px; text-align: left; vertical-align: middle; }
        th { background-color: #f2f2f2; text-align: center; }
        img { width: 50px; height: 35px; object-fit: cover; }
    </style>
</head>
<body>

    <h2>Data Projects</h2>

    <table>
        <thead>
            <tr>
                <th width="30">No</th>
                <th width="70">Gambar</th>
                <th>Title</th>
                <th width="100">Teknologi</th>
                <th>Description</th>
                <th width="70">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $index => $row)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center">
                    <img src="{{ public_path('images/' . ($row->image ?? 'default.jpg')) }}" onerror="this.src='https://via.placeholder.com/50x35?text=No+Img'">
                </td>
                <td><b>{{ $row->title }}</b></td>
                <td>{{ $row->tech }}</td>
                <td>{{ $row->description }}</td>
                <td align="center">{{ $row->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>