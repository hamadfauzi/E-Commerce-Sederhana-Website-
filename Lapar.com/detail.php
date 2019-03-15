<!DOCTYPE html>
<?php
    session_start();
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = mysqli_query($conn, "SELECT * FROM gambar WHERE id = '$id'");
    $data = array();
    if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_array($query);
        $data = array(
            'id' => $id,
            'nama' => $row['nama'],
            'harga' => $row['harga'],
            'gambar' => $row['image'],
            'deskripsi' => $row['deskripsi'],
            'kategori' => $row['kategori']
        );
    }
}

?>
<head>
    <title>Tubes Webpro - Halaman Produk</title>
    <link href="style3.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    
 <!-- ****** Top Header Area Start ****** -->
    <div class="atas">
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com"><i class="fa fa-twitter" target = "_blank" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-area d-flex align-items-center justify-content-end">
                        <div class="about-area d-flex">
                            <div class="about">
                                <a href="Tentang%20kami.html">Tentang Kami</a>
                            </div>
                            <div class="bantuan">
                                <a href="FAQ.html">FAQ</a>
                            </div>
                        </div>
                        <div class="login_register_area d-flex">
                             <?php
                           /* if(!isset($_SESSION['status'])){
                                //die('Belum di set');
                            }*/
                            if(isset($_SESSION['status'])){
                                
                                
                            ?>
                            <div class="login">
                                   <a  href="" id="user">Halo <?php echo $_SESSION['username'] ?></a>
                             
                            </div>
                            <div class="">
                                <a href="logout.php" id="logout">Logout</a>
                            </div>
                            <?php
                                } else {
                                    
                            ?>
                            <div class="login">
                                   <a  href="page-Login.php" id="masuk">Masuk</a>
                             
                            </div>
                            <div class="">
                                <a href="page-daftar.php" id="daftar">Daftar</a>
                            </div>
                            <?php
                                };
                            ?>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->
        
    
      <!-- ****** Header Area Start ****** -->
    <div>
        
                    <nav class="navbar navbar-expand-lg">
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="Home.php"><img id="logo" src="img/logo44.png" ></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                                    <div class="dropdown-menu" >
                                        <a class="dropdown-item" href="#">Makanan</a>
                                        <a class="dropdown-item" href="#">Minuman</a>
                                       
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari Makan..">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit" style="height: 35px; margin: 0px;">
                                                Cari</button>
                                            </div>
                                    </div>
                                </li>
                                <li class="nav-item" style="margin-top: 7px;">
                                    <div class="wishlist">
                                        <a href="Wishlist.php"><img src="img/bookmark.png" style="width: 30px;"></a>
                                    </div>
                                </li>
                                <li class="nav-item" style="margin-top: 5px;">
                                    <div>
                                        <div class="hamburger"></div>
                                        <div class="hamburger"></div>
                                        <div class="hamburger"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
        </div>

    <!-- ****** Header Area End ****** -->
        
    <br><br>
    <div class="container" style="margin-top: 15px; margin-bottom: 15px;">
        <div class="row">

            <div class="col-lg-7">
                <div class="mySlides">
                    <img src="img/menu/<?php echo $data['gambar'] ?>" class="img-rounded" style="width: 650px; height: 450px; margin-bottom: 10px;">
                </div>

                <a class="prev" onclick="plusSlides(-1)" style="color: gray"> &#10096 </a>
                <a class="next" onclick="plusSlides(1)" style="color: gray"> &#10097 </a>

                <div class="row">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-light">
                    <div class="card-header">
                        <h4 class="card-title" style="color: #0080ff; margin-bottom: -2px;">Detail Produk</h4>
                    </div>
                    <div class="card-body">
                        <h3 style="color: #e67300"><?php echo $data['nama'] ?></h3>
                        <h4 style="color: #00cc00">Rp. <?php echo $data['harga'] ?>,-</h4>
                        <hr>
                        <p style="text-align: justify; font-size: 14px;"><?php echo $data['deskripsi'] ?></p>
                    </div>
                    <div class="card-footer">
                        <div style="display: inline">
                            <button type="button" class="btn btn-success" style="cursor: pointer;">Beli Sekarang</button>
                            <button type="button" class="btn btn-secondary" style="cursor: pointer;">Bookmark</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card border-light">
                    <div class="card-header">
                        <h4 class="card-title" style="color: #0080ff; margin-bottom: -2px;">Ulasan</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3" src="img/blog-img/17.jpg" style="width: 80px; height: 80px;">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Udin Sedunia</h6>
                                    <br>
                                    <p style="font-size: 14px;">Jadi lapar wa deek ninggalina ge.</p>
                                    <p style="color: #ffbf00; font-size: 20px;">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                                </div>
                            </li>
                            <hr>
                            <li class="media">
                                <img class="mr-3" src="img/blog-img/18.jpg" style="width: 80px; height: 80px;">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Sinta Naumi</h6>
                                    <br>
                                    <p style="font-size: 14px;">Nyam Nyam</p>
                                    <p style="color: #ffbf00; font-size: 20px;">&#9733; &#9733; &#9734; &#9734; &#9734;</p>
                                </div>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
            </div> 

        </div>

    </div>
    <!-- Footer -->
<footer class="text-center">
 
  <div class="row">
    <div class="col-12">
      <p>Tugas Besar Matakuliah Pemrograman WEB</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> S1 Teknik Informatika</p>
      <p><span class="glyphicon glyphicon-phone"></span> Telkom University</p>
    </div>   
</div>

    <!-- Import JQuery, Boorstrap, Javascript Plugin -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/others/plugins.js"></script>
    <script src="js/active.js"></script>
    
    <script src="javas.js"></script>
</footer>
    </div>
    
</body>

</html>