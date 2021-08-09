<?php
include "baglanti.php";
if($_POST){
    $isim=$_POST["ad"];
    $desc=$_POST["aciklama"];
    $ekleme=$baglan->prepare("INSERT INTO urunler set urun_ad=?,aciklama=?");
    $ekleme->execute(array($isim,$desc));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>   
<nav class="navbar navbar-expand-lg navbar-light bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin:0 0 0 650px">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="ürünlistele.php"><button type="button" class="btn btn-outline-primary">Ürün Listele</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ürünekle.php"><button type="button" class="btn btn-outline-primary">Ürün Ekle</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stoklistele.php"><button type="button" class="btn btn-outline-primary">Stok Listele</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stokekle.php"><button type="button" class="btn btn-outline-primary">Stok Ekle</button></a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
            <div class="col-6">
                <label for="ad" class="form-label">Ürün ad:</label>
                <input type="text" name="ad"  class="form-control" id="">
            </div>
            <div class="col-6">
                <label for="aciklama" class="form-label">Ürün Açıklama:</label>
                <input type="text" name="aciklama"  class="form-control" id="">
            </div>
            <button type="submit" name="buton" class="btn btn-primary btn-lg btn-block">Gönder</button>
            


        </form>
    </div>
  
    
</body>
</html>