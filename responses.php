<?php
$fullname = $_POST['fullname'];
$nickname = $_POST['nickname'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$gaji = $_POST['gaji'];
$keahlian = $_POST['keahlian'];
$offer = $_POST['offer'];
$reason = $_POST['reason'];
$nama = $_FILES['picture']['name'];
$tmp  = $_FILES['picture']['tmp_name'];
$foto = $nama."jpg";
move_uploaded_file($tmp, $foto);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Bloomers Responses</title>
</head>
<body>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Full Name</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
        <th scope="col">Salary</th>
        <th scope="col">Interests</th>
        <th scope="col">Offers</th>
        <th scope="col">Reasons</th>
        <th scope="col">Picture</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?php echo "$fullname" ?></td>
        <td><?php echo "$nickname" ?></td>
        <td><?php echo "$gender" ?></td>
        <td><?php echo "$phonenumber" ?></td>
        <td><?php echo "$email" ?></td>
        <td><?php echo "$gaji" ?></td>
        <td><?php 
        foreach ($keahlian as $key => $value) {
            echo "$value <br>"; 
        }
         ?></td>
        <td><?php echo "$offer" ?></td>
        <td><?php echo "$reason" ?></td>
        <td><img src="<?php echo $foto ?>" style="height: 280px; width: 200px;"></td>
      </tr>
    </tbody>
  </table>
</body>
</html>