<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
	<div class="main-wrapper">
		<header>
			<div class="header">
				<div class="logo">
					<img src="assets/img/crashzone_logo_alpha.jpg" alt="">
				</div>

				<div class="top-right-nav">
					<div class="nav">
						<ul>
							<li>Email |</li>
							<li><a href="#">Forum</a> |</li>
							<li><a href="#">Reprorting</a> |</li>
							<li><a href="#">Timer Reporting</a> |</li>
							<li><a href="#">Time Report</a> |</li>
							<li><a href="#">Supplier</a> |</li>
							<li><a href="#">Choice List</a> |</li>
							<li><a href="#">Contact Us</a> |</li>
							<li><a href="#">Support</a> |</li>
							<li><a href="#">Help</a> |</li>
							<li><a href="#">Setting</a> |</li>
							<li><a href="#">Signout</a></li>
						</ul>
					</div>

					<div class="search-bar">
						<form action="">
							<input type="text" name="search" id="input" value="" required="required" pattern="" title="">
							<button type="submit" class="btn btn-default">Search</button>
							<button type="button" class="btn btn-default">Adv Search</button>
						</form>
					</div>
				</div>

			</div>
		</header>
		
		<div id="main-content" class="container-fluid">
			<div class="row">
				<div class="move-bar col-md-9 col-sm-8">
					<a type="button" class="func-button btn btn-warning">Back</a>
				</div>
				<div class="action-bar col-md-3 col-sm-4">
					<div class="action-bar-item active">Details</div>
					<div class="action-bar-item">View</div>
				</div>
			</div>
			
			<div class="row quote-wrapper">
				<div class="blank-box"></div>
				<div class="quote-list">
					<div class="detail-content">
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">Owner</div>
								<div class="panel-body">
								   <table width="100%">
										   		<tr>
													<td>Owner:</td>
													<td><input type="text" name="Owner"></td>
										   		</tr>

										   		<tr>
													<td>Address:</td>
													<td><input type="text" name="Owner"></td>
										   		</tr>

										   		<tr>
													<td>Mobile:</td>
													<td><input type="text" name="Owner"></td>
										   		</tr>

										   		<tr>
													<td>Phone:</td>
													<td><input type="text" name="Owner"></td>
										   		</tr>

										   		<tr>
													<td>Fax:</td>
													<td><input type="text" name="Owner"></td>
										   		</tr>

										   		<tr>
													<td>Email:</td>
													<td><input type="text" name="Owner"></td>
										   		</tr>
										   </table>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">Shop</div>
								<div class="panel-body">
								   <table width="100%">
										   		<tr>
													<td>Quote:</td>
													<td><input type="text" name="quote"></td>
										   		</tr>

										   		<tr>
													<td>Date in:</td>
													<td><input type="text" name="date_in"></td>
										   		</tr>

										   		<tr>
													<td>Date out:</td>
													<td><input type="text" name="date_out"></td>
										   		</tr>

										   		<tr>
													<td>Estimator:</td>
													<td><input type="text" name="estimator"></td>
										   		</tr>

										   		<tr>
													<td>Total:</td>
													<td>$9.08</td>
										   		</tr>
										   </table>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-6">
						<div class="panel panel-default">
						<div class="panel-heading">Vehicle</div>
							<div class="panel-body">
							   <table width="100%">
									   		<tr>
												<td>Rego:</td>
												<td><input type="text" name="rego"></td>
									   		</tr>

									   		<tr>
												<td>D.O.M:</td>
												<td><input type="text" name="dom"></td>
									   		</tr>

									   		<tr>
												<td>Make:</td>
												<td><input type="text" name="make"></td>
									   		</tr>

									   		<tr>
												<td>Model:</td>
												<td><input type="text" name="model"></td>
									   		</tr>

									   		<tr>
												<td>Series:</td>
												<td><input type="text" name="series"></td>
									   		</tr>

									   		<tr>
												<td>Badge:</td>
												<td><input type="text" name="badge"></td>
									   		</tr>

									   		<tr>
												<td>Colour:</td>
												<td><input type="text" name="colour"></td>
									   		</tr>
									   </table>
							</div>
						</div>
					</div>

						<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">Rates</div>
							<div class="panel-body">
							   <table width="100%">
							   		<tr>
										<td>RR:</td>
										<td><input type="text" name="rr"></td>
							   		</tr>
							   	</table>
							</div>
						</div>
					</div>
					
					
					</div>
			

					</div>
				</div><!-- End of Quote-list-->
			</div>
			

		<footer>
			
		</footer>
	</div>
	<script>
	function onclickMenu() {
		$('.action-bar-item').on('click', function () {
			$('.action-bar-item').removeClass('active');
			$(this).addClass('active');
		});
	}

	function onlickItem() {
		$('.quote-table > tbody > tr').on('click', function () {
			alert('haha');
		});
	}
	$(document).ready(function (){
		onclickMenu();
		onlickItem();
	});
	</script>
</body>
</html>