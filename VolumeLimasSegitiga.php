   <?php
    $Volume = 0;
        if (isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggiA = $_POST['tinggiA'];
        $konstanta = $_POST['konstanta'];
        $tinggiL =$_POST['tinggiL'];
        
        function volume($a, $tA, $kons, $tL)
        {
            $volume = (($a * $tA * $kons)*$tL) * 1/3;
            return $volume;
        }
        
        $volume = volume($alas, $tinggiA, $konstanta, $tinggiL); 
    }
    ?>

    <!DOCTYPE html>
	<html lang="en">
	<head>
		    <meta charset="UTF-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Penghitung Volume Limas Segitiga</title>
	</head>
	<body>
		
	<h1>Penghitung Volume Limas Segitiga</h1>
	<form action="" method="post">
		<label for="alas">Alas : </label><br>
        <input type="text" name="alas" id="alas" value="<?php if (isset($_POST["submit"])){echo $alas;} ?>"><br>
        <label for="tinggiA">Tinggi Alas: </label><br>
        <input type="text" name="tinggiA" id="tinggiA" value="<?php if (isset($_POST["submit"])){echo $tinggiA;} ?>"><br>
 		<label for="tinggiL">Tinggi Limas: </label><br>
 		<input type="text" name="tinggiL" id="tinggiL" value="<?php if (isset($_POST["submit"])){echo $tinggiL;} ?>"><br>
        <input type="hidden" name="konstanta" value="0.5">
        <input type="submit" name="submit" value="Hasil"><br>
        <label for="volume">Volume : </label>
        <input type="text" name="volume" value="<?php if (isset($_POST['submit'])){echo $volume;}?>" id="volume">
	</form>
	</body>
	</html>


 