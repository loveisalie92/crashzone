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
				<div class="blank-box">
					<div class="container-fluid">
					<div class="row pull-right">
						<input type="text" name="" id="input" value="" required="required" pattern="" title="">
						<button type="button" class="btn btn-primary func-button">Send</button>
					</div>
					</div>

				</div>
				<div class="quote-list">
					<div class="detail-content">
						<div class="head-info">
		<h5>Lorem ipsum.</h5>
		<p>Email: Lorem ipsum</p>
		<p>ABN</p>
		</div>

		<h3>Estimate No: <span class="estimate-no">6</span></h3>

		<div class="owner-info">
			<table>
				<tr>
					<th>Lorem.</th>
					<td>Lorem ipsum.</td>
				</tr>

				<tr>
					<th>Lorem.</th>
					<td>Lorem ipsum.</td>
				</tr>

				<tr>
					<th>Lorem.</th>
					<td>Lorem ipsum.</td>
				</tr>

				<tr>
					<th>Lorem.</th>
					<td>Lorem ipsum.</td>
				</tr>

				<tr>
					<th>Lorem.</th>
					<td>Lorem ipsum.</td>
				</tr>

				<tr>
					<th>Lorem.</th>
					<td>Lorem ipsum.</td>
				</tr>



			</table>
			</div>

			<div class="invoice">
				<table>
					<thead>
						<th>RR(Rate: $30.90)</th>
						<th></th>
						<th>Hrs</th>
					</thead>

					<tbody>
						<tr>
							<td>Lorem.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem ipsum.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem ipsum dolor.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem ipsum dolor sit.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td></td>
							<td><strong>Sub Total Hrs</strong></td>
							<td>3.90</td>
						</tr>

						<tr>
							<td></td>
							<td><strong>Sub Total</strong></td>
							<td>156.00</td>
						</tr>
					</tbody>
				</table>

				<hr></hr>
				<table>
					<thead>
						<th>Repair(Rate: $30.90)</th>
						<th></th>
						<th>Hrs</th>
					</thead>

					<tbody>
						<tr>
							<td>Lorem.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem ipsum.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem ipsum dolor.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem ipsum dolor sit.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td>Lorem.</td>
							<td></td>
							<td>1.00</td>
						</tr>

						<tr>
							<td></td>
							<td><strong>Sub Total Hrs</strong></td>
							<td>3.90</td>
						</tr>

						<tr>
							<td></td>
							<td><strong>Sub Total</strong></td>
							<td>156.00</td>
						</tr>
					</tbody>
				</table>
				<table>

				</table>
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
