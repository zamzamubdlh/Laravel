<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari-Books</title>
</head>
<body>
    <center>Hasil Berdasarkan Id Yg Kita Masukan</center>
        Judul           : {{$data->judul}} <br>
        Pengarang       : {{$data->pengarang}} <br>
        Penerbit        : {{$data->penerbit}} <br> 
        Tahun Terbit    : {{$data->tahun_terbit}} <br>
        Kategori Buku   : {{$data->kategori_buku}} <br>
        Harga           : {{$data->harga}} <br>
        Jumlah Halaman  : {{$data->jumlah_halaman}} <br> 
</body>
</html>