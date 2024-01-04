<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Anytime Bingo Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('frontend/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('frontend/images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="">
                    <div class="form-logo">
                        <img style="width: 250px;" src="frontend/images/bingo_logo.jpg" alt="">
                    </div>
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
                    <div class="form-group">
						<div class="form-wrapper">
							<label for="">Date of Birth</label>
							<input type="date" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Contact No.</label>
							<input type="text" class="form-control">
						</div>
					</div>
                    <div class="form-wrapper">
						<label for="">Address</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" class="form-control">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button>Register Now</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>