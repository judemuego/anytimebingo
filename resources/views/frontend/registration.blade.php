<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Anytime Bingo Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('frontend/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
					<div class="checkbox">
						<label>
							<input type="checkbox"> I accept the <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Terms of Use & Privacy Policy.</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<button>Register Now</button>
				</form>
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Anytime Bingo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1 style="margin-bottom: 15px;">Bingo Terms of Use and Privacy Policy</h1>

        <h2 style="margin-bottom: 15px;">Terms of Use</h2>
        <p  style="margin-bottom: 8px;">
            <strong>1. Acceptance of Terms:</strong> By registering for the bingo game, you agree to comply with these terms and conditions. If you do not agree, please refrain from participating.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>2. Eligibility:</strong> Participants must meet the age requirements and any other eligibility criteria specified for the bingo game.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>3. Registration Information:</strong> You agree to provide accurate and complete information during the registration process.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>4. Payment:</strong> If applicable, you agree to pay any registration fees using the designated payment method.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>5. Code of Conduct:</strong> Participants are expected to conduct themselves in a respectful and fair manner during the bingo game.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>6. Prizes:</strong> Prizes, if any, will be awarded according to the rules specified for the bingo game.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>7. Termination of Participation:</strong> We reserve the right to terminate or suspend your participation in the bingo game for violation of these terms or any other reason deemed appropriate.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>8. Changes to Terms:</strong> We may update these terms from time to time. It is your responsibility to review them periodically.
        </p>

        <h2 style="margin-bottom: 15px;">Privacy Policy</h2>
        <p  style="margin-bottom: 8px;">
            <strong>1. Information Collection:</strong> We collect personal information such as name, contact details, and payment information for the purpose of bingo registration.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>2. Use of Information:</strong> The collected information is used for registration, communication, and prize distribution related to the bingo game.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>3. Third-Party Disclosure:</strong> We do not sell or share your personal information with third parties, except for purposes related to the bingo game (e.g., prize distribution).
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>4. Security:</strong> We implement reasonable security measures to protect your personal information. However, we cannot guarantee the security of data transmitted over the internet.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>5. Cookies:</strong> Our website may use cookies to enhance your experience. You can disable cookies in your browser settings.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>6. Data Retention:</strong> We retain your information only for as long as necessary for the purposes outlined in this policy.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>7. Consent:</strong> By registering for the bingo game, you consent to the collection and use of your personal information as described in this policy.
        </p>

        <p  style="margin-bottom: 8px;">
            <strong>8. Changes to Privacy Policy:</strong> We may update our privacy policy. Any changes will be posted on our website, and your continued participation implies acceptance of the updated policy.
        </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>