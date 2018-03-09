<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Show Us Your Flower Power!</title>
</head>
<body style="background-image:url(flower1.jpg);
background-size: cover; 
background-repeat: no-repeat; 
background-attachment: fixed;
background-position: center">
<div style="margin-top: 5%; margin-bottom: 3%; margin-right: 20%; margin-left: 20%; border-bottom: 5%; border: solid #e3ab7c 6px; border-radius: 5px">	
	<h1 style="color: 	#f3ecaf; font-family: Palatino; font-size: 40px; text-align: center;">NEW BLOOMERS REGISTRATION PAGE</h1>
</div>
<div style="margin-right: 15%; margin-left: 15%; margin-bottom: 10%; padding: 10px; background: rgba(234, 237, 242, 0.5)">	
	<form method="POST" action="responses.php" enctype="multipart/form-data">

		<div class="form-group">
			<label for="fullname">Full Name</label>
			<input type="fullname" class="form-control" id="fullname" name="fullname" placeholder="Enter Your Full Name">
		</div> 

		<div class="form-group">
			<label for="nickname">How could we address you?</label>
			<input type="nickname" class="form-control" id="nickname" name="nickname" placeholder="Enter Your Address">
		</div>
		<p>Gender</p>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
			<label class="form-check-label" for="male">
				Male
			</label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
			<label class="form-check-label" for="female">
				Female
			</label>
		</div>
		<br>
		<div class="form-group">
			<label for="phonenumber">Phone Number</label>
			<input type="NIM" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
		</div>
		<div class="form-group">
			<label for="EmailPendaftar">Email</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
		</div>
		<p>How Much Salary You Wish You Get?</p>
		<div class="form-group">
			<select class="form-control" name="gaji">
				<option><3.000.000</option>
				<option>>3.000.000</option>
				<option><5.000.000</option>
				<option>>5.000.000</option>
			</select>
		</div>
		<p>Let Us Know What Do You Like to Do!(max 2)</p>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="Flower Cutting" name="keahlian[]" value="Flower Cutting">
			<label class="form-check-label" for="FlowerCutting">Flower Cutting</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Flower Arranging" name="keahlian[]" value="Flower Arranging">
			<label class="form-check-label" for="FlowerArranging">Flower Arranging</label>
			<br>
			<input type="checkbox" class="form-check-input" id="JustWhateverNeeded" name="keahlian[]" value="Just Whatever Needed">
			<label class="form-check-label" for="JustWhateverNeeded">Just Whatever Needed</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Others" name="keahlian[]" value="others">
			<label class="form-check-label" for="others">Others</label>
		</div>
		<br>
		<div class="form-group">
			<label for="offers">I can offer the following skills, knowledge and expertise</label>
			<textarea class="form-control" id="offers" rows="3" name="offer" placeholder="Please tell us about yourself"></textarea>
		</div>
		<div class="form-group">
			<label for="reasons">My reason for getting hired</label>
			<textarea class="form-control" id="reasons" rows="3" name="reason" placeholder="Please tell us what you hope to gain from blooming with us"></textarea>
		</div>

		<div class="form-group">
			<label for="picture">Upload Picture</label>
			<input type="file" class="form-control-file" id="picture" name="picture">
		</div>
		<button type="Bloomer" class="btn btn-primary">Bloom!</button>
	</form>
</div>
</body>
</html>