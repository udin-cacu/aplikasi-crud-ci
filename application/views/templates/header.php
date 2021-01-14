<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- My CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?= $judul;?></title>
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<div class="container">
		  <a class="navbar-brand" href="#"><h3>COLLECTOR</h3></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-link" href="<?= base_url(); ?>collection">Collection</a>
		      <a class="nav-link" href="<?= base_url(); ?>collectors">Collector</a>
		      <a class="nav-link" href="#">About</a>
		    </div>
		  </div>
		</div>
	</nav>