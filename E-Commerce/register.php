<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Silk Road Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/silkroad.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						SilkRoad Register
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" placeholder="First Name" id="fname" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" placeholder="Last Name" id="lname" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" placeholder="Username" id="username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" placeholder="Email" id="email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" placeholder="Password" id="password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" placeholder="Confirm Password" id="confirm" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-check-circle" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="button" name="register" id="register" class="login100-form-btn register" value="Register" />
					</div>

				<div class="text-center p-t-12">
					<span class="txt1">
						Already have an account?
					</span>
					<a class="txt2" href="login.php">
						Login
					</a>
				</div>
			</form>
		</div>
	</div>
</div>




<script src="js/main.js"></script>	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/tilt/tilt.jquery.min.js"></script>




<script>
	$('.js-tilt').tilt({
		scale: 1.1
	})

	$(".register").click(function(){
		 // document.getElementById("#send_orders").disabled = false;
		 var fname = $('#fname').val();
		 var lname = $('#lname').val();
		 var username = $('#username').val();
		 var email = $('#email').val();
		 var password = $('#password').val();
		 var confirm = $('#confirm').val();
		 var register = "register";
				//alert(prod_price);
				if((fname != "") && (lname != "") && (username != "") && (email != "") && (password != "") && (confirm != ""))
				{
					$.ajax({
						url:"action.php",
						method:"POST",
						data:{fname:fname, lname:lname, username:username, password:password, confirm:confirm, register:register},
						success:function(data)
						{
							alert("qwe");
							swal({
								type: 'success',
								title: 'Successfully Added into Cart',
								showConfirmButton: false,
								timer: 1500
								
							})
						}
					});
				}
				else
				{
					alert("wao");
					swal({
						type: 'error',
						title: 'Please fill all values',
						showConfirmButton: false,
						timer: 1750
					})
				}
			});


</script>

</body>
</html>