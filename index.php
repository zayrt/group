<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CBM Groupe, Distributeur, intégrateur, & développeur de solutions pour l'entreprise.">
	<meta name="author" content="">
	<title>CBM GROUPE</title>
	<link href="style/bootstrap.min.css" rel="stylesheet">
	<style>
		#maincontainer{
			max-width: 1024px;
			margin: 0 auto;
		}
		body{
			margin: 0;
			padding: 0;
		}
		header, section, div{
			border: 1px solid lightgrey;
		}
		p{
			font-size: 1.2em;
			color:grey;
		}
		.square{
			padding-top: 100%;
		}
		.rectangle{
			padding-top: 90%;
			maring-rigt: 5%;
		}
		#logo{
			display: block;
			position: relative;
			background: url(img/logo-cbm-groupe.png);
			background-size: cover;
		}
		#wip{
			display: block;
			position: relative;
			background: url(img/wip.png);
			background-size: cover;
		}
		h1{
			font-size: 3em;
			text-transform: uppercase;
			text-shadow: 0 4px 0 rgba(0,0,0,0.2);
			text-align: center;
			font-weight: 700;
			margin-bottom: 20px;
		}
		h2{
			font-size: 2.6em;
			color: #535154;
			font-weight: 100;
			text-align: center;
			margin: 0 auto 20px;
			max-width: 940px;
		}
	</style>
</head>

<body>
<div id="maincontainer">

<div class="row">
	<header class="col-xs-12 container-fluid">
		<div class="row">
		<section class="col-xs-offset-4 col-xs-4">
			<div id="logo" class="col-xs-12 square"></div>
		</section>
		</div>
		<h1>Des solutions pour l'entreprise.</h1>
		<h2>" Distribuer, intégrer et développer les outils de demain "</h2>
		<div class="row">
			<section class="col-xs-offset-3 col-xs-3">
				<div id="wip" class="col-xs-12 rectangle"></div>
			</section>
			<section class="col-xs-3">
				<div class="col-xs-12">
					<br>
					<p>Notre site est en cours de développement, il sera en ligne prochainement. N'hésitez pas à nous contacter en utilisant le formulaire de contact ci-dessous</p>
				</div>
			</section>
		</div>
		<h1>Contact</h1>
		<h2>" Discutons ensemble de votre projet "</h2>
		<div class=row>
			<section class="col-md-12">
				<div class="row">
					<article class="col-sm-9">
						<form class="form-horizontal" role="form" method="post" action="">
							<div class="form-group">
			   					<div class="col-md-offset-1 col-md-10">
									<input type="email" class="form-control" id="inputEmail" placeholder="Email (exemple@gmail.com)" name="mail">
			  					</div>
							</div>
							<div class="form-group">
			   					<div class="col-md-offset-1 col-md-10">
									<input type="text" class="form-control" id="inputtel" placeholder="Téléphone" name="tel">
			  					</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-1 col-md-10">
									<textarea id="inputMessage" class="form-control" rows="15" placeholder="Message" name="message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-1 col-md-10">
									<button type="submit" class="btn btn-success" name="action" value="send">Envoyer</button>
								</div>
							</div>
						</form>
					</article>
					<article class="col-md-3">
						<h5><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;+33 (0)1 57 05 55 93</h5>
			 			<h5><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; 57 rue du temple 75004 Paris</h5>
			  			<h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<a title="envoyer un email" href="index.php?action=contact">contact@cbm-groupe.com</a></h5>
					</article>
				</div>
			</section>
		<div>
		</div>
	</header>
</div>

</div>
</body>

</html>