<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forsad - Data Alumni</title>
</head>
<body>

<?php
include 'nav.php';
?>

<div class="jumbotron jumbotron-fluid alumni">
  <div class="container">
    <h1 class="display-4">Data Alumni   </h1>
    <p class="lead">Mau cari siapa? Yuk cari aja disini!</p>
    <form class="form-inline">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-50" type="text" placeholder="Search"
        aria-label="Search">
    </form>
  </div>
</div>

<div class="tabel container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Konsulat</th>
      <th scope="col">Domisili Sekarang</th>
      <th scope="col">Institusi Pendidikan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pulan</td>
      <td>Equator</td>
      <td>Jakarta</td>
      <td>Jakarta</td>
      <td>UNJ</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mpok</td>
      <td>Irhaby</td>
      <td>Jogja</td>
      <td>Jogja</td>
      <td>UII</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Pulanan</td>
      <td>Equator</td>
      <td>Jakarta</td>
      <td>Jakarta</td>
      <td>UNJ</td>
    </tr>
  </tbody>
</table>

</div>
<?php
include 'foo.php'
?>
</div>
</body>
</html>