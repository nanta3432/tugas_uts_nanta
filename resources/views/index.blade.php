<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Barang Elektronik</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body">
    <header class="header">
        <a href="" class="a-header">Home</a>
        <a href="" class="a-header">About</a>
        <a href="" class="a-header">Barang</a>
    </header>
    <div class="side-bar">
        <h3>Kontak</h3>
        <a href="" class="side-link">Facebook</a> <br><br>
        <a href="" class="side-link">Youtube</a> <br><br>
        <a href="" class="side-link">Instagram</a> <br><br>
    </div>
    <div class="konten">
        <h5>Nama  : I Gede Nanta Perama Putra </h5>
        <h6>NIM   : 19103432</h6>
        <table border cellpadding="10">
            <tr>
                <th>Id Kategori</th>
                <th>Kategori</th>
                <th>Keterangan</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td align="center">{{$data->id}}</td>
                <td>{{$data->kategori}}</td>
                <td>{{$data->keterangan}}</td>
            </tr>
            @endforeach
        </table>
    </div>  
</body>
</html>