<?php

include "connect.php";

$nama= $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$alamat =$_POST['alamat'];
$hobi=$_POST['hobi'];
$sql=" INSERT INTO bukutelepon (nama,email,tel,alamat,hobi) "
        ."VALUES ('$nama','$email','$tel','$alamat','$hobi')";

$res=mysqli_query($link,$sql);

if($res) echo "DATA BERHASIL DISIMPAN";

//opsional karena skripnya akan dihentikan otomatis
mysqli_close($link);

?>