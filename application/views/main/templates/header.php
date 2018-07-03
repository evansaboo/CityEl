<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Välkommen till CityEl!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container mb-3">
		<nav class="navbar fixed-top navbar-light bg-light">
	  	<a class="navbar-brand" href="#">City El</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="navbar-item">
					<a class="navbar-link" href="<?php echo base_url(); echo index_page(); ?>/pages/view/admin">Admin</a>
				</li>
				<li class="navbar-item">
					<a class="navbar-link" href="<?php echo base_url(); echo index_page(); ?>/pages/view/index">Home</a>
				</li>
			</ul>
		</nav>
	</div>
