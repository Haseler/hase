<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Corona Haiti test</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- Custom styles for this template -->
		<link href="css/clean-blog.min.css" rel="stylesheet">

	</head>
	<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Corona Haiti test</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="test.html">Faire un test</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

		 <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
						<?php
							$ask1 =$_POST['ask1'];
							$ask2 =$_POST['ask2'];
							$ask3 =$_POST['ask3'];
							$ask4 =$_POST['ask4'];
							$ask5 =$_POST['ask5'];
							$ask6 =$_POST['ask6'];
							$ask7 =$_POST['ask7'];
							$ask8 =$_POST['ask8'];
							$ask9 =$_POST['ask9'];
							$ask10 =$_POST['ask10'];
							$ask12 =$_POST['ask12'];
	
								if($ask1=="OUI" and ($ask2=="toux"|| $ask="mauxtete" || $ask2="mauxgorge" || $ask2="mauxgorge" || $ask2="courbature" ) and $ask3=="OUI" and $ask4=="OUI" and $ask5=="OUI" and $ask5=="OUI" and ($ask12=="OUI" || $ask12=="jenesais" )){
													echo '<p id="pvalider">';
													echo "Vous Presentez les Symptomes du COVID-19 <br/> Potez un masque si vous sortez dans la rue restez Chez-vous <br/> Buvez beaucoup de liquide <br/>";
													echo "si votre etat s'aggrave appeler le 116";
													echo "</p>";	
								}
								elseif(($ask1=="OUI" || $ask1=="NON")  and($ask2=="toux" || $ask="mauxtete" || $ask2="mauxgorge" || $ask2="mauxgorge" || $ask2="courbature" || $ask2="aucun" )  and ($ask3=="OUI"|| $ask3=="NON") and ($ask4=="OUI"|| $ask4=="NON") and ($ask5=="OUI"|| $ask5=="NON") and ($ask12=="NON" || $ask12=="jenesais")){
					
													echo '<p id="pvalider">';
													echo "Dans 80% des cas vous allez vous remettre apres avoir reposer un certain temps <br/> si votre etat ne s'ameloir pas appelez votre medecin. <br/> Et suivre les principes ces principes <br/> Buvez beaucoup de liquide <br/>";
													echo "Ne serer pas la main des gens<br/> Rester chez vous<br/> Laver vos main";
													echo "</p>";	
								}
								elseif($ask1=="NON" and ask2=="aucun" and ($ask6=="OUI" || $ask6=="NON") and $ask=="OUI" and $ask8=="OUI" and ($ask12=="NON" || $ask12=="jenesais")){
									echo '<p id="pvalider">';
									echo "Continuer à prendre vos medicaments si votre <br/> situation s'agrave appeler votre medecin <br/> suivez ces principes: <br/> Buvez beaucoup de liquide <br/>";
									echo "Ne serez pas la main des gens<br/> Restez chez vous<br/> Lavez vos mains";
									echo "</p>";
								}
								else{
									echo '<p id="pvalider">';
									echo "Votre etat est stable <br/> pour rester en sante continu de suivre ces principes: <br/> Buvez beaucoup de liquide <br/>";
									echo "Ne serez pas la main des gens<br/> Restez chez vous<br/> Lavez vos mains";
									echo "</p>";
								}
					?>
		</p>
            <span class="subheading">
				<a class="btn btn-primary float-center" href="question.php">Refaire le test</a>
			</span>
          </div>
        </div>
      </div>
    </div>
	</header>
	
	 <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        </div>
      </div>
    </div>
  </article>
	 <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">
			Copyright by MSPP. Developed By M. Haseler <br/> Readaption Haitienne du https://coronabr.com.br/ du Brezil <br/> par le Dr. Jean Hugues Henrys
		  </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>

