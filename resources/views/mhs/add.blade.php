<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Isi Data Mahasiswa</title>
</head>
<body>
    <a href="/mahasiswa">Kembali</a>
    <h1>Form Tambah Data Mahasiswa</h1>

    <form method="post" action="/mahasiswa/store">
        @csrf
    NPM <input type="text" name="npm" required> <br>
    NAMA <input type="text" name="nama" required> <br>
    JURUSAN <input type="text" name="jurusan" required> <br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>