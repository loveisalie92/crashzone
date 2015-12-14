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
				<div class="quote-list">
					<div class="quote-content">
						<div class="row">
							<div class="col-md-3 object">
								<div class="blank-box"></div>
								<ul>
									<li class="active-object">Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
								</ul>
							</div>

							<div class="col-md-3 sub-object">
								<div class="blank-box"></div>
								<ul>
									<li class="active-sub-object">Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
								</ul>
							</div>

							<div class="col-md-6 quote-detail">
								<div class="button-group"><button class="func-button btn btn-warning btn-sm" type="button">Delete</button></div>
								<table width="100%" >
									<thead>
										<tr>
											<th>Description | Rate: <input type="text" name="rate" value="10" style="width:40px"></th>
											<th>Hrs</th>
											<th>$</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td class="active-job">Lorem ipsum.</td>
											<td><input class="hours-input" type="text" value="3"></td>
											<td><input class="money-input" type="text" value="3"></td>
										</tr>
										<tr>
											<td>Lorem ipsum dolor sit.</td>
											<td><input class="hours-input" type="text" value="3"></td>
											<td><input class="money-input" type="text" value="3"></td>
										</tr>
										<tr>
											<td>Lorem ipsum dolor sit amet.</td>
											<td><input class="hours-input" type="text" value="3"></td>
											<td><input class="money-input" type="text" value="3"></td>
										</tr>
									</tbody>
								</table>

							</div>

						</div>
					</div>
				</div>
			</div>
			

		<footer>
			
		</footer>
	</div>
	</div>
	<script>

	var fixQuoteHeight = function(){
		var height = 0;
		$('.quote-content ul').each(function(){
			var currentHeight = $(this).height();
			height = height > currentHeight ? height : currentHeight;
		});
		$('.quote-content ul').css('min-height',height+'px');
	};

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

	function onclickObjectItem() {
		$('.object li').on('click', function () {
			$('.object li').removeClass('active-object');
			$(this).addClass('active-object');
		});
	}

	function onclickSubObjectItem() {
		$('.sub-object li').on('click', function () {
			$('.sub-object li').removeClass('active-sub-object');
			$(this).addClass('active-sub-object');
		});
	}

	function onclickJobItem() {
		$('.quote-detail table tbody tr').on('click', function () {
			$('.quote-detail table tbody tr td').removeClass('active-job');
			$(this).find("td:first").addClass('active-job');
		});
	}

	function onclickLinks() {
		$('a').on('click', function () {
			alert('linkClicked');
		});
	}

	$(document).ready(function (){
		onclickMenu();
		onlickItem();
		onclickObjectItem();
		onclickSubObjectItem();
		fixQuoteHeight();
		onclickJobItem();
		onclickLinks();
	});




	</script>
</body>
</html>