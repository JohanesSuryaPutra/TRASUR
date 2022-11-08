<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Data Kendaraan</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Tipe Kendaraan</th>
                <th>Kapasitas</th>
                <th>Harga</th>
                <th>Nama Rute</th>
                <th>Asal</th>
                <th>Tujuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kendaraan as $k)
                <tr class="text=center">
                    <td>{{ $k->tipe_kendaraan }}</td>
                    <td>{{ $k->daya_angkut }}</td>
                    <td>{{ $k->harga }}</td>
                    <td>{{ $k->datarute->nama_rute }}</td>
                    <td>{{ $k->datarute->asal }}</td>
                    <td>{{ $k->datarute->tujuan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
