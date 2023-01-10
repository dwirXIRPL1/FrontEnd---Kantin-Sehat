<?php

require 'koneksi.php';
session_start();
if(isset($_SESSION['username'])){
  // $query = "SELECT * FROM user WHERE username='$_SESSION[`username`]'";
  // $result = mysqli_query($conn, $query);
}

$produk = mysqli_query($conn, "SELECT * FROM produk");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kantin Sehat 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        form {
            position: absolute;
            left: 150px;

        }
        .btn-lengkap{
          border-radius: 50px;
        }
        .pesana-saya {
          margin-right: 20px;
        }

        .box{
          width: 230px;
          height: 120px;
          border-radius: 20px;
          background-color: aqua;
        }

        .sidebar{
          margin: 20px;
        }
        
        .kategori{
          text-decoration: none;
          color: black;
          font-size: 24px;
        }
    </style>
  </head>
  <body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Kantin Sehat</h5>
          <span class="text-muted">Foof and Drink.</span>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light ms-5">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Mau Makan Ngab?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

          <?php if(isset($_SESSION["username"])) : ?>
              <a href="" class="btn" style="margin-left: 500px;">Halo, <?= $_SESSION["username"]; ?></a>
              <a href="logout.php" class="btn btn-primary px-4 py-2">Logout</a>
          <?php endif; ?>
            
          <?php if(!isset($_SESSION["username"])) : ?>
            <a href="login/index.php" class="btn btn-primary" style="margin-left: 500px;">Login</a>
            <a href="register/index.php" class="btn btn-outline-primary">Register</a>
          <?php endif; ?>

          <a href="" style="text-decoration: none;"><i class="fa-solid fa-heart"></i> 
            <i class="fa-sharp fa-solid fa-3"></i> Kantin Sehat</a>
        </div>
      </nav>

      <div class="container mt-3">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="foto/assets/banner.jpg" class="d-block w-100" height="450" alt="...">
            </div>
            <div class="carousel-item">
              <img src="foto/assets/bann.jpg" class="d-block w-100" height="450" alt="...">
            </div>
            <div class="carousel-item">
              <img src="foto/assets/ban3.jpg" class="d-block w-100" height="450" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  
      </div>

              
      <section class="container">
        <div class="row mt-5">
          <div class="col">
            <h4 class="fs-1 fw-bold">Kategori Pilihan</h4>
          </div>
        </div>
        <hr>

        <div class="row mt-3">
          
          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="foto/assets/icon/snack.jpeg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">snack</div>
            </div>
            </a>
          </div>

          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="foto/assets/icon/drink.jpeg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">drink</div>
            </div>
            </a>
          </div>
          
          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="foto/assets/icon/burger.jpeg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">burger</div>
            </div>
            </a>
          </div>
          
          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="foto/assets/icon/milk.jpeg " alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">milk</div>
            </div>
            </a>
          </div>
          
          
          <div class="col">
          <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="foto/assets/icon/bread.jpeg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">bread</div>
            </div>
          </div>
          </a>
        </div>
  </section>

   <div class="container mt-4">

    <div class="row">
      <div class="col">
        <h4 class="fs-1 fw-bold"> Produk </h4>
        <hr class=""> 
      </div>
    </div>

    <div class="row">
      <?php $i = 1; ?>
      <?php foreach($produk as $data) : ?>
      <div class="col d-flex justify-content-between">
        <div class="card" style="width: 18rem;">
          <img src="foto/<?= $data["foto"]; ?>" class="card-img-top" height="300px" alt="">
          <div class="card-body">
            <h5 class="card-title"><?= $data["nama_produk"]; ?></h5>
            <h5 class="card-title"><?= $data["harga"]; ?></h5>
            <a href="detail-produk/index.php?id=<?= $data["id_produk"]; ?>" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </div>  

      </div>
      <?php $i++ ?>
        <?php endforeach; ?>
    </div>

    </div>
    <footer class="my-4 text-center">
      @copyright 2022 All right reserved Kantin Sehat
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>