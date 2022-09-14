<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Muhammed Anas s/o Tariq">
        <meta name="generator" content="Hugo 0.98.0">
        <title>Subḥāna Mawlid</title>
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="css/style.css" type="text/css" rel="stylesheet">    
  	</head>
  	<body class="d-flex text-center bg-dark">    
		<div class="cover-container d-flex w-100 mx-auto flex-column text-white">
		  	<header class="mb-auto">
		    	<div>
		      		<h3 class="float-md-start mb-0">Subḥāna Mawlid</h3>
		      		<nav class="nav nav-masthead justify-content-center float-md-end">
			        	<a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#"> <i class="bi bi-house-door-fill"></i></a>
			        	<!-- <a class="nav-link fw-bold py-1 px-0" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Settings</a> -->
						<li class="nav-item dropdown">
						    <a class="nav-link fw-bold py-1 px-0 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"> <i class="bi bi-card-list"></i></a>
						    <ul class="dropdown-menu">
						    	<?php 
							    	$handle = fopen("list.txt", "r");
									if ($handle) {
										$i = 0;
										while ($line = fgets($handle)) {
											echo "<li><a class='dropdown-item' href='".$i++.".php'>$line</a></li>";
										}	
										fclose($handle);
									}
								?>
						    </ul>
						 </li>
		      		</nav>
		    	</div>
		  	</header>

		  	<main class="px-3">
	    		<div id="intro">

		    	<!-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p> -->
		    	<?php 
			    	$handle = fopen("intro.txt", "r");
					if ($handle) {
						$i = 0;
						echo "<h2 class='arabic'>";
						while ($line = fgets($handle)) {
							echo $line."<br>";
							if (++$i == 3) {
								break;
							}
						}
						echo "</h2><br>";	
						$line = fgets($handle);
						echo "<h1 class='arabic cursive text-warning'>$line</h1>";
						fclose($handle);
					}
				?>
		    	<p class="lead">
		      		<a href="0.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Start reading <i class="bi bi-caret-right-fill"></i></a>
		    	</p>
		    	</div>
		  	</main>
		  	<!-- Button trigger modal -->
			<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Launch demo modal
			</button> -->


		  	<!-- <footer class="mt-auto text-white-50">
		    	<p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
		  	</footer> -->
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLabel">Settings</h5>
		        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      		</div>
			      	<div class="modal-body">
			        	<div class="form-check form-switch">
						  	<input class="form-check-input" type="checkbox" role="switch" id="translation" onchange="toggle_translate();">
						  	<label class="form-check-label" for="translation">Translation</label>
						</div>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		    	</div>
		  	</div>
		</div>

    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  	</body>
</html>
