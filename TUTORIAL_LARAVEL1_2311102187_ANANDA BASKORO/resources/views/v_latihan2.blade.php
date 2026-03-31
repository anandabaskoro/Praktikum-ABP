<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h3>{{ $title }}</h3>
    <p><b>Nama Praktikan</b> : {{ $nama_user }}</p>
    <p><b>NIM</b> : {{ $nim }}</p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
        </tr>

        @php $no = 1; @endphp
        @foreach($daf_mhs as $mhs)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['asal'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>