 <?php 
        session_start();
        include 'koneksi.php';
        
        if(isset($_POST['submitLogin'])){
            $username = $_POST['usernameUser'];
            $password = $_POST['passwordUser'];
 
            $login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
            $cek = mysqli_num_rows($login);
 
            if($cek == 1){
	            $_SESSION['username'] = $username;
                $_SESSION['status'] = "Login";
                
                
                if(isset($_SESSION['status'])){
                    header("location: Home.php");    
         
                }
            }else{
	           header("location: page-login.php");	
            }
        }
      
      ?>

<!DOCTYPE html>
<html>
<head>
	 <title>LAPAR - Solusi Cepat Bunuh Lapar</title>
	<link rel="stylesheet" href="style.css">

  	 <style>

</style>
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
    <!-- Active JS -->
    <!-- Active JS -->
    <script src="js/active.js"></script>

<div class="loginbackground">
 
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
                            <div class="login">
                                   <a  href="page-Login.html" id="masuk">Masuk</a>
                             
                            </div>
                            <div class="">
                                <a href="page-daftar.php" id="keluar">Daftar</a>
                            </div>
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

  <center>
  <form id = "form" action="" method="post">
    <table>
      <tr>
        <td colspan="3"><center><img class="logo" src="img/logo22.png"></center></td>
        </tr>
    <tr>
        <td><img src="img/2. REGISTER/USER.png"></td>
        <td><input type="text" name="usernameUser" placeholder="Username"><br><hr></td>
      </tr>
      <tr>
        <td><img src="img/2. REGISTER/PASSWORD.png"></td>
        <td><input type="password" name="passwordUser" placeholder="Password"><br><hr></td>
      </tr>
      <tr>
        <td colspan="3"><center><button name="submitLogin"><b>LOGIN</b></button></center></td>
      </tr>
      <tr>
        <td colspan="3"><center><p>Not have an account ?<a id="register" href="page-daftar.php"> Register</a></p></center></td>
      </tr>
    </table>
  </form>
      
      
      <br><br><br><br>
  </center>
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

</footer>
    
     
    </div>
    </body>
</html>
    
