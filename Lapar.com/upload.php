
<?php 

include 'koneksi.php';
session_start();


?>


<?php 
      
        
            // alert("Anda Harus Login Terlebih Dahulu");
            //header("location: page-login.php");
        if(isset($_POST['submitPOST'])){
            $file = $_FILES['gambar']['tmp_name'];
            
            if(!isset($file)){
                echo "<script>alert('pilih file gambar')</script>";
            }else{
                $gambar 		= addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
                
		        $idGambar       = $_POST['idGambar'];
                $namaGambar     = $_POST['namaGambar'];
                $image_name	= addslashes($_FILES['gambar']['name']);
                $harga          = $_POST['hargaGambar'];
                $deskripsi      = $_POST['Deskripsi'];
                $kategoriGambar = $_POST['kategori'];
		        $gambar_size	= getimagesize($_FILES['gambar']['tmp_name']);
 
                if($gambar_size == false){
			         echo "<script>alert('file yang anda pilih bukan gambar')</script>";
		      }else{
			         if(!$insert = mysqli_query($conn,"INSERT INTO gambar VALUES('$idGambar', '$namaGambar','$harga','$deskripsi','$kategoriGambar','$image_name')")){
				        echo "<script>alert('gagal upload')</script>";
                        header('location: upload.php');
                     }else{
                         //ambil id terakhir insert
				        //$lastid = mysql_insert_id();
 
				        echo "<script>alert('upload berhasil')</script>";
                         header('location: Home.php');
                    }
		      }
            }
        }
            
?>