<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa Teknologi Informasi UIN Salatiga</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>

        @foreach ($dataMahasiswa as $mhs)
            <tr>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>
                    @if ($mhs['status'] == 'Aktif')
                        <span style="color: green;">Aktif</span>
                    @else
                    <span style="color: red;">Cuti</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>