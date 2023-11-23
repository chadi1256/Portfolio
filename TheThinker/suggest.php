<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quote Suggestion Page</title>
  	<link rel="stylesheet" href="style.css">
</head>
<body class="body2">

<nav>

		<label for="touch" id="drop-menu" style="display:none"><span>MENU</span> </label>
		<input type="checkbox" id="touch">

		<ul class="slide">

			<li><a href="suggest.php">SUGGEST A QUOTE</a></li>
			<li><a href="quotes.html">ALL QUOTES</a></li>
			<li><a href="over_ons.html">CONTACT</a></li>
		</ul>

	</nav>

	


<div class="section">
	<div class="container">
		<div class="row full-height justify-content-center">
			<div class="col-12 text-center align-self-center py-5">
				<div class="section pb-5 pt-5 pt-sm-2 text-center">
					<h4> SUGGEST QUOTE </h4>
					<div class="card-3d-wrap mx-auto">
						<div class="card-3d-wrapper">
							<div class="card-front">
								<div class="center-wrap">
									<div class="section text-center">
										<form method="post"action="submit.php">
											<div class="form-group">
												<input type="text" name="quote" class="form-style" placeholder="Enter the quote" id="quote" autocomplete="off" required>
											</div>	
											<div class="form-group mt-2">
												<input type="text" name="writer" class="form-style" placeholder="Enter the writer" id="writer" autocomplete="off" required>
											</div>
											<button type="submit" class="btn mt-4">Submit</button>
											<button class="btn child" onclick="window.location.href='index.html'">Back to Home</button>

										</form>
										
			      					</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div>
		      	</div>
	      	</div>
      	</div>
    </div>
</div>
</body>
</html>
