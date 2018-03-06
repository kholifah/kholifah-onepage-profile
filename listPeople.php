<!DOCTYPE html>
<html>
	<head>
		<title>list people</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bower_components/bootstrap-material-design/dist/css/material.min.css">
		<link rel="stylesheet" href="css/listPeople.css">
	</head>
	<body>
		<div class="header">
			<div class="navbar">
				<h1>List People</h1>
			</div><!--end-navbar-->
		</div><!--end-header-->

		<div class="content">
			<ul class="list-people">
				<li>
					<div class="profile">
						<img src="http://www.gravatar.com/avatar/<?php echo md5("tm.kholifah@gmail.com");?>?s=70" alt="profile images">
						<div class="name">
							<a href="#!">
								<h2>
									John Dhoe
								</h2>
							</a>
							<small>Backend Developer</small>
						</div>
					</div><!--end-profile-->

					<div class="desc">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur non amet pariatur totam nam ratione suscipit explicabo, illum, asperiores, quibusdam error officiis quod deserunt, voluptate illo vero numquam voluptatum. Qui.</p> -->
					</div><!--end-desc-->
				</li>
			</ul>
		</div><!--end-content-->

		<div class="footer">
			<span>copyright &copy; 2018 | kholifah</span>
		</div><!--end-footer-->


	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
	</body>
</html>
