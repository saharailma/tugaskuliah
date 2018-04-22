<?php
include "connect.php";
$id= $_GET['id'];

$sql = "SELECT id,nama,email,tel,alamat,hobi " . 
        "FROM bukutelepon WHERE id='$id'";
        $res = mysqli_query($link,$sql);
        $coba=mysqli_fetch_assoc($res);
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body style="background-color:#2980b9;">

<?print_r($coba);?>
    <div class="container" >
                <div class="row justify-content-center " style="margin:50px;">
                    <div class="col-xm-6 offset-xm-3" style="">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                        <form action="#" method ="POST">
                            <div class="form-group">

    <label for="id">ID</label>
    <input type="text"  name="id" class="form-control"  placeholder="<?php echo $coba['id'];?> " disabled><br>
    </div>
                            <div class="form-group">

    <label for="name">Nama</label>
    <input type="text"  name="nama" class="form-control" value="<?php echo $coba['nama'];?>"><br>
    </div>
    <div class="form-group">
             <label for="exampleInputEmail1">Alamat Email</label>
             <input name="email" type="email" class="form-control"  aria-describedby="emailHelp" value="<?php echo $coba['email']; ?>"><br> 
             </div>
   <div class="form-group">
            <label for="phone">Nomor Handphone</label>
            <input name="phone" type="tel" class="form-control" value="<?php echo $coba['tel']; ?>"><br> </div>
  <div class="form-group">
             <label for="alamat">Alamat</label>
             <input name="alamat" type="alamat" class="form-control"  value="<?php echo $coba['alamat']; ?>"><br> 
             </div>   
    <div class="form-group">
    <label for="name">Hobi</label>
    <input type="text" class="form-control" name="hobi" value="<?php echo $coba['hobi'] ;?>" ><br>
    </div> 
    <input type="submit" name="submit" value="Simpan Update" style="float:right;"><br>
    </form>
    </div>
                        </div>        
                    </div>
                </div>
            </div>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];
	$hobi = $_POST['hobi'];

  $sql1="UPDATE bukutelepon SET nama='$nama', email='$email',tel='$phone',alamat='$alamat',hobi='$hobi'
        WHERE id='$id'";

    $hasil=mysqli_query($link,$sql1);
}

if (isset($_POST['submit'])) {
header('location:select.php');
}
?>


