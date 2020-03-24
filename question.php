<!DOCTYPE html>
<html lang="fr">

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
            <p>
				La prise d'anti-inflamatoire (Ibuprophène, Cortisone...) pourait être un facteur d'agravation de l'infection. en cas de fièvre,
				prenez du parcétamol. Mais si vous etes déjà sous traitement, n'arrêtez pas ce traitement, demandez l'avis de votre medecin.
			</p>
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
			<!-- nous recupere les variable -->
			<?php
				if(isset($_GET['diagnostique'])){
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
					
				}
			?>
			<form method="post" action="reponse.php">
				<p>Avez-vous une Fièvre?<br />       
				<input type="radio" name="ask1" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask1" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Maintenant dis-moi si vous-avez eu l'un de ces symptômes?<br />       
				<input type="checkbox" name="ask2" value="nezbouche"/> <label for="OUI">Nez Bouché</label><br />       
				<input type="checkbox" name="ask2" value="fatigue"/> <label for="fatigue">Fatigue</label><br /> 
				<input type="checkbox" name="ask2" value="toux"/> <label for="TOUX">Toux</label><br /> 
				<input type="checkbox" name="ask2" value="mauxtete"/> <label for="mauxtete">Maux de tête</label><br /> 
				<input type="checkbox" name="ask2" value="courbature"/> <label for="courbature">Courbatures</label><br /> 
				<input type="checkbox" name="ask2" value="malaisegenerale"/> <label for="malaisegenerale">Malaise Générale</label><br /> 
				<input type="checkbox" name="ask2" value="mauxgorge"/> <label for="mauxgorge">Maux de Gorge</label><br />
				<input type="checkbox" name="ask2" value="aucun"/> <label for="aucun">Aucun</label><br />
				<p>
				<p>Ces derniers Jours, avez-vous noté une perte <br/> de votre goût ou de votre odorat<br />       
				<input type="radio" name="ask3" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask3" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Ces dernières 24 heures, avez-vous de diarrhée <br/> avec aux moins 3 selles molles.<br/>       
				<input type="radio" name="ask4" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask4" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Dans les denières 24 heures, avez-vous noté<br/> une difficulté à respirer lorsque<br/>vous parlez ou faites un petit effort<br />       
				<input type="radio" name="ask5"  value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask5" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Avez-vous de l'hypertension arterielle mal equilibrée?<br/> ou avez-vous eu une maladie Cardiaque ou vasculaire<br/> ou prenez-vous un traitement à visé cardiaque<br />       
				<input type="radio" name="ask6" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask6" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Êtes-vous diabetique?<br />       
				<input type="radio" name="ask7" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask7" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Avez-vous une maladie respiratoire ou <br/>êtes-vous suivis par un pneumologue?<br />       
				<input type="radio" name="ask8" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask8" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Avez-vous une maladie connue pour <br/>diminuer vos defenses immunitaires?<br />       
				<input type="radio" name="ask9" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask9" value="NON"/> <label for="NON">NON</label><br />
				<p>
				<p>Êtes-vous enceinte ou âgé de 80 ans ou plus ?<br />       
				<input type="radio" name="ask10" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask10" value="NON"/> <label for="NON">NON</label><br />
				<input type="radio" name="ask10" value="nonapplicable"/> <label for="NON">Non applicable</label><br />
				<p>Avez-vous été en contact avec qu'elqu'un infecté<br/> ou suspecte d'etre infecte par le virus?<br />       
				<input type="radio" name="ask12" value="OUI"/> <label for="OUI">OUI</label><br />       
				<input type="radio" name="ask12" value="NON"/> <label for="NON">NON</label><br />
				<input type="radio" name="ask12" value="jenesais"/> <label for="jenesais">Je ne sais pas</label><br />
				<p>
				<input type="submit" value="Enregistrer et continuer"/>
			</form>
			<?php
				if(isset($_GET['prix']))
				echo "--> ";
			?>
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
			Copyright by MSPP. <br/> Developed By H. Montimer <br/> Readaption Haitienne du <a href="https://coronabr.com.br/"> du Brezil<a/> <br/> par le Dr. Jean Hugues Henrys
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
