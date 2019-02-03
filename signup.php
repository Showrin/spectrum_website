<!DOCTYPE html>
<html>
<head>

	<title>Spectrum (Login)</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- >>>>>>>>>>>>>>>> Linking CSS files <<<<<<<<<<<<<<<<< -->

	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" type="text/css" href="css/mixture.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- >>>>>>>>>>>>>>>> Linking Favicon <<<<<<<<<<<<<<<<< -->
	<link rel="shortcut icon" type="images/x-icon" href="images/favicon/Spectrum Logo.png">
	
</head>
<body>

	<div class="total-body">

		<div class="flex-body">
			
			<center>
			
				<img src="images/favicon/Spectrum Logo.png" alt="">
				
			</center>
			
			<div class="form-flex-div">
				
				<div class="row total-form-holder">
			
					<ul class="tabs">
			            <li class="tab col l6 m6 s6"><a class="active" href="#sign-in-form">Sign In</a></li>
			            <li class="tab col l6 m6 s6"><a href="#sign-up-form">Sign Up</a></li>
			        </ul>

			        <div id="sign-in-form" class="col s12">
							
						<center>
							<h1 class="content-title">Sign In</h1>
							
							<div class="row">
								<form class="col s12">
								    
								    <div class="row">
								        <div class="input-field">
								            <input id="email" type="email" autocomplete="off" required>
								            <label for="email">Email</label>
								        </div>
								    </div>
								    <div class="row">
								        <div class="input-field">
								            <input id="password" type="password" required>
								            <label for="password">Password</label>
								        </div>
								    </div>

									<button class="btn waves-effect waves-light" type="submit" name="action">Sign In
								        <i class="paper plane icon"></i>
								    </button>

								    <span class="forget-pass-text">Forget the password? <a href="#">Reset Password</a></span>
								</form>
							</div>
						</center>

			        </div>

			        <div id="sign-up-form" class="col s12">
						
						<center>
							<h1 class="content-title">Sign Up</h1>
							
							<div class="row">
								<form class="col s12">
								    
								    <div class="row">
								        <div class="input-field col s6">
										    <input id="first_name" type="text" required>
										    <label for="first_name">First Name</label>
										</div>
										<div class="input-field col s6">
										    <input id="last_name" type="text" required>
										    <label for="last_name">Last Name</label>
										</div>
									</div>
									<div class="row">
								        <div class="input-field col s12">
								            <input id="email" type="email" autocomplete="off" required>
								            <label for="email">Email</label>
								        </div>
								    </div>
								    <div class="row">
								        <div class="input-field col s12">
								            <input id="password" type="password">
								            <label for="password" required>Password</label>
								        </div>
								    </div>

									<button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
								        <i class="paper plane icon"></i>
								    </button>

								</form>
							</div>
						</center>

			        </div>

				</div>

			</div>

		</div>

	</div>
	





	<!--  >>>>>>>>>>>>>> Jquery files <<<<<<<<<<<<<<<<<  -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	<!--  >>>>>>>>>>>>>> Materializecss JS files <<<<<<<<<<<<<<<<<  -->
	<script type="text/javascript" src="js/materialize/js/global.js"></script>
	<script type="text/javascript" src="js/materialize/js/component.js"></script>
	<script type="text/javascript" src="js/materialize/js/anime.min.js"></script>
	<script type="text/javascript" src="js/materialize/js/cash.js"></script>
	<script type="text/javascript" src="js/materialize/js/buttons.js"></script>
	<script type="text/javascript" src="js/materialize/js/waves.js"></script>
	<script type="text/javascript" src="js/materialize/js/cards.js"></script>
	<script type="text/javascript" src="js/materialize/js/tabs.js"></script>
	<script src="js/materialize/js/carousel.js"></script>
	<script src="js/materialize/js/forms.js"></script>
	<script>
		$(document).ready(function(){
    $('.tabs').tabs(
    	{
    		swipeable: true,
    		duration: 150
    	});
  });
	</script>


	<!-- >>>>>>>>>>>>>>>> Search Modal Javascript <<<<<<<<<<<<<<<<< -->
	<script type="text/javascript">
	

		var content = [
		  { title: 'Andorra', url: 'index.php' },
		  { title: 'United Arab Emirates' },
		  { title: 'Afghanistan' },
		  { title: 'Antigua' },
		  { title: 'Anguilla' },
		  { title: 'Albania' },
		  { title: 'Armenia' },
		  { title: 'Netherlands Antilles' },
		  { title: 'Angola' },
		  { title: 'Argentina' },
		  { title: 'American Samoa' },
		  { title: 'Austria' },
		  { title: 'Australia' },
		  { title: 'Aruba' },
		  { title: 'Aland Islands' },
		  { title: 'Azerbaijan' },
		  { title: 'Bosnia' },
		  { title: 'Barbados' },
		  { title: 'Bangladesh' },
		  { title: 'Belgium' },
		  { title: 'Burkina Faso' },
		  { title: 'Bulgaria' },
		  { title: 'Bahrain' },
		  { title: 'Burundi' }
		  // etc
		];

		$('.ui.search').search({
		    source: content
		});

</script>

<script>
	$('.ui.dropdown')
		.dropdown()
	;
</script>

</body>
</html>