<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Ubat </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">


<h2 class="mb-4">Senarai Maklumat Ubat di Bahagian Farmasi</h2>

<table class="table table-bordered table-striped">
<tr>
    <th>Bil</th>
    <th>ID Produk</th>
    <th>Nama Produk</th>
    <th>Buatan Dari</th>
    <th>Tindakan</th>
</tr>

<?php
$bil = 1;

$result = mysqli_query($conn, "SELECT id_ubat,id_product,nama_produk,made_in FROM maklumat_ubat ");

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?= $bil++; ?></td>
    <td><?= $row['id_product']; ?></td>
    <td><?= $row['nama_produk']; ?></td>
     <td><?= $row['made_in']; ?></td>
    <td>
        <!-- view--->
        <a href="view.php?id_ubat=<?= $row['id_ubat']; ?>" class="btn btn-success btn-sm"> VIEW</a>
        
    </td>
</tr>
<?php } ?>
</table>

</div>


</body>
</html>