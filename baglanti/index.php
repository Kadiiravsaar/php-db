<?php
include "baglanti.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #E6E6FA;
        }
    </style>
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
        <div class="collapse navbar-collapse" id="navbarNavDropdown"  style="margin:0 0 0 650px">
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
    


    <!-- <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <a href="ürünlistele.php"><button type="button" class="btn btn-outline-primary">Ürün Listele</button></a>
                    <a href="ürünekle.php"><button type="button" class="btn btn-outline-primary">Ürün ekle</button></a>
                </div>
                <div class="col-6">   
                    <a href="stoklistele.php"><button type="button" class="btn btn-outline-secondary">stok listele</button></a>
                    <a href="stokekle.php"><button type="button" class="btn btn-outline-secondary">stok ekle</button></a>
                </div>
            </div>
        </div>
    </nav> -->

</body>
</html>