<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="sas.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="sejarah.php">Sejarah<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tokoh.php">Tokoh</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buku_tamu.php">Buku Tamu</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <h1>Buku Tamu</h1>

    <form action="" method="POST" name="buku">

  <div class="form-group">
    <label for="nm">Nama</label>
    <input type="text" class="form-control" id="nm" name="nm" placeholder="">
  </div>
  <div class="form-group">
    <label for="kls">Kelas</label>
    <input type="text" class="form-control" id="kls" name="kls" placeholder="">
  </div>
  <div class="form-group">
    <label for="jrsn">Jurusan</label>
    <input type="text" class="form-control" id="jrsn" name="jrsn" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary"  name='submit' >Submit</button>

</form>
</div>

<?php 
if(isset($_POST['submit'])){
    $nama = $_POST['nm'];
    $kelas = $_POST['kls'];
    $jurusan = $_POST['jrsn'];

    echo "<div class='container'>";
    echo "<h4>Nama : $nama</h4>";
    echo "<h4>Kelas : $kelas</h4>";
    echo "<h4>Jurusan : $jurusan</h4>";
    echo "</div>";
}
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>