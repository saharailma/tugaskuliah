<?php

include "connect.php";

$sql = "SELECT id,nama,email,tel,alamat,hobi " . 
        "FROM bukutelepon";


        $res = mysqli_query($link,$sql);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <title>Data</title>
   
</head>
<body style="background-color:#ffca47;">
<div class="container" >
    <div class="row justify-content-center " style="margin-top:50px;">
        <div class="col-xm-6 offset-xm-3" style="">
            <div class="card" style="width: 55rem;">
                    <table class="table table-bordered">
                        <tr><th class="text-center"colspan =" 7"  > Biodata </th></tr>
                        <tr>
                            <td class="table-primary">ID</td>
                            <td class="table-primary">Nama</td>
                            <td class="table-primary">Email</td>
                            <td class="table-primary">Phone</td>
                            <td class="table-primary">Alamat</td>
                            <td class="table-primary">Hobi</td>
                            <td class="table-primary" colspan=2>Action</td>
                        </tr>

<?php
        while ($baris = mysqli_fetch_array($res,MYSQLI_BOTH)){
            $id= $baris['id'];
            echo "<tr>";
            echo "<td>". $baris['id']. "</td>";
            echo "<td>". $baris['nama']. "</td>";
            echo "<td>". $baris['email']. "</td>";
            echo "<td>". $baris['tel']. "</td>";
            echo "<td>". $baris['alamat']. "</td>";
            echo "<td>". $baris['hobi']. "</td>";
            echo '<td><a href="delete.php?id='.$baris['id'].'">DELETE</a></td>';
            echo '<td><a href="edit.php?id='.$baris['id'].'">EDIT</a></td>';
            echo "</tr>";
       
        }

        
echo "</table>";
        mysqli_close($link);
        ?>
        </table>
                    <a href="form.html" style=" width:150px; margin-left:45.5rem;" class="btn btn-outline-dark btn-sm">Kembali Ke Form!</a>
            </div>
        </div>
    </div>
</div>



</body>
</html>