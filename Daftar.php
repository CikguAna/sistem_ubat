<!DOCTYPE html>
<html>
<head>
    <title>Login  ke Sistem Ubat </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">

<h3>DAFTAR PENGGUNA</h3>

<form method="POST" action="simpan_daftar.php" class="card p-4">
     
   
    <div class="mb-3">
       <label for ="staf">Nama Pegawai</label>
    </div>
    <input type="text" name="nama_pegawai" class="form-control" >

    <div class="mb-3">
        <label>Nama Pengguna </label>
        <input type="text" name="nama_pengguna" class="form-control">
    </div>

     <div class="mb-3">
        <label>Katalaluan </label>
        <input type="text" name="katalaluan" class="form-control">
    </div>
    

    <button class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>
</body>
</html>