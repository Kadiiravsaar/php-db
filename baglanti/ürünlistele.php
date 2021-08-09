
<?php
include "baglanti.php";
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `urunler` WHERE `urunler`.`urun_ıd` = ?";
    $sorgusil= $baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);

}

$sorgu = $baglan->prepare('SELECT * FROM urunler');
$sorgu->execute();
$urunlist=$sorgu-> fetchAll(PDO::FETCH_OBJ);
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
    
    <div class="container mt-2">
        <div class="row justify-content-center">
            <table class="table table-striped table-bordered table-dark">
                <tr>
                    <td>Ürün ID</td>
                    <td>Ürün adı</td>
                    <td>Ürün açıklama</td>
                    <td>İşlemler</td>
                </tr>
            <?php
            foreach($urunlist as $urundon){?>
                <tr>
                    <td><?=$urundon->urun_ıd ?></td>
                    <td><?=$urundon->urun_ad?></td>
                    <td><?=$urundon->aciklama ?></td>
                    <td>
                        <div class="btn-group"> 
                            <a href="ürünekle.php" class="btn btn-success">Ekle</a>
                            <a href="?sil=<?=$urundon->urun_ıd ?>" onclick="return confirm('Silinsin mi ?')" class="btn btn-danger">Sil</a>    
                        </div>

                    </td>
                </tr>
            <?php } ?>
            
            


            </table>
        </div>
    </div>
    
</body>
</html>