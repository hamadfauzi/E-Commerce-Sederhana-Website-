<!DOCTYPE html>
<?php
session_start();
include 'koneksi.php';


?>
<?php             
    if(!isset($_SESSION['status'])){                           
        header("location: page-login.php");
    }
?>
<?php

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
    $username1 = $_SESSION['username'];
    $id1 = $data['id'];
    $sql1 = mysqli_query($conn,"SELECT * FROM wishlist WHERE username='$username1' AND id='$id1'");
    if(mysqli_num_rows($sql1) < 1){
        $username = $_SESSION['username'];
        $id = $data['id'];
        $nama = $data['nama'];
        $harga = $data['harga'];
        $image = $data['gambar'];
    
        $sql = "INSERT INTO wishlist (USERNAME, id, nama,harga,image) VALUES ('$username','$id','$nama','$harga','$image')";
        if ($conn->query($sql) === TRUE) {
            /*echo "<script>
                alert('Berhasil menyimpan Wishlist');
                </script>";*/
        } 
    }else{
        /*echo "<script>
                alert('Udah Ada Goblok');
                </script>";*/
    }    
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>LAPAR - Solusi Cepat Bunuh Lapar</title>

    <!-- Favicon --><!--
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    </head>
<body>
    
    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

  <!-- ****** Top Header Area Start ****** -->
    <div class="atas">
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-area d-flex align-items-center justify-content-end">
                        <div class="about-area d-flex">
                            <div class="about">
                                <a href="register.html">Tentang Kami</a>
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
                                   <a  href="" id="masuk">Halo <?php echo $_SESSION['username'] ?></a>
                             
                            </div>
                            <div class="">
                                <a href="logout.php" id="logout">Logout</a>
                            </div>
                            <?php
                                } else {
                                  
                                  header("location: page-login.php");
                                  echo "<script>alert('Anda harus login terlebih dahulu')";                                    
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
                                        <a href="Wishlist.php"w><img src="img/bookmark.png" style="width: 30px;"></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown" style="margin-top: 5px;">
                                     <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div>
                                            <div class="hamburger"></div>
                                            <div class="hamburger"></div>
                                            <div class="hamburger"></div>
                                         </div>
                                    </a>
                                  
        
                                    <div class="dropdown-menu" >
                                        <a class="dropdown-item" href="#">Profil</a>
                                        <a class="dropdown-item" href="#">Daftar Belanjaan</a>
                                    </div>
                               
                                </li>
                            </ul>
                        </div>
                    </nav>
        </div>

    <!-- ****** Header Area End ****** -->
    <!--Body Star-->

    <div class="tubuh">
        <h3> Daftar Wishlist </h3>  
        <table border="1">
            <tr style="color: gray;">
                <td colspan="2" class="panel-footer"><center>Nama Barang</center></td>
                <td class="panel-footer"><center>Harga</center></td>
                <td class="panel-footer"><center>Action</center></td>
                
            </tr>
            <?php 
                $sql = "select * FROM wishlist where username = '".$_SESSION['username']."'";
                $tampil = mysqli_query($conn,$sql);
                while ($data1 = mysqli_fetch_array($tampil)){
                    echo "<tr>";
                    echo "<td><a href='detail.php?id=".$data1['id']."'><img src='img/menu/".$data1['image']."' class='img-responsive' style='width:10% height:10%'></a></td>";
                    echo "<td class='panel-footer'>".$data1['nama']."</td>";
                    echo "<td class='panel-footer'>".$data1['harga']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
    </div>

    <!--Body End-->
    
<!-- Footer -->
<footer class="text-center">
 
  <div class="row">
    <div class="col-12">
      <p>Tugas Besar Matakuliah Pemrograman WEB</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> S1 Teknik Informatika</p>
      <p><span class="glyphicon glyphicon-phone"></span> Telkom University</p>
    </div>   
</div>

</footer>
    </div>
</body>
    
</html>