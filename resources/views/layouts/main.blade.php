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
							<button type="submit" class="func-button btn btn-warning">Search</button>
						</form>
					</div>
				</div>

			</div>
		</header>
		
		<div id="main-content" class="container-fluid">
			<div class="row">
				<div class="move-bar col-md-9 col-sm-8">
					<button type="button" class="btn btn-default"><<</button>
					<button type="button" class="btn btn-default">>></button>
					<a href="#" class="func-button btn btn-primary">New</a>
				</div>
				<div class="action-bar col-md-3 col-sm-4">
					<div class="action-bar-item active">All</div>
					<div class="action-bar-item">Quote</div>
					<div class="action-bar-item">Job</div>
					<div class="action-bar-item">Invoice</div>
					<div class="action-bar-item">Finished</div>
				</div>
			</div>
			
			<div class="row quote-wrapper">
				<div class="blank-box"></div>
				<div class="quote-list">
				<div>
					<table class="table table-striped quote-table table-responsive">
						<thead>
							<tr>
								<th>Ref</th>
								<th>Date</th>
								<th>Owner</th>
								<th>Rego</th>
								<th>Make</th>
								<th>Model</th>
								<th>Colour</th>
								<th>Insurance</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>7</td>
								<td>09/02/2015</td>
								<td>Trong</td>
								<td>Lorem ipsum.</td>
								<td>Lorem ipsum.</td>
								<td>Lorem.</td>
								<td>Lorem.</td>
								<td>Lorem ipsum.</td>
							</tr>

							<tr>
								<td>7</td>
								<td>09/02/2015</td>
								<td>Trong</td>
								<td>Lorem ipsum.</td>
								<td>Lorem ipsum.</td>
								<td>Lorem.</td>
								<td>Lorem.</td>
								<td>Lorem ipsum.</td>
							</tr>

							<tr>
								<td>7</td>
								<td>09/02/2015</td>
								<td>Trong</td>
								<td>Lorem ipsum.</td>
								<td>Lorem ipsum.</td>
								<td>Lorem.</td>
								<td>Lorem.</td>
								<td>Lorem ipsum.</td>
							</tr>

							<tr>
								<td>7</td>
								<td>09/02/2015</td>
								<td>Trong</td>
								<td>Lorem ipsum.</td>
								<td>Lorem ipsum.</td>
								<td>Lorem.</td>
								<td>Lorem.</td>
								<td>Lorem ipsum.</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
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