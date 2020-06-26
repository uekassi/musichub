<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Music Hub | The world of mew stars</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<style type="text/css">
		img[src='images/musichub1.jpg']{
			/*border: solid orange;*/
			padding: 20%;
		}
		.lg-title{
			font-size: 50px;
			text-align: center;
		}
		.boite{
			position: absolute;
			top: 0;
			border: solid orange;
			height: 500px
			width: 500px;
			z-index: 30;
		}
		.carousel-inner .item{
			height: 350px;
			width: 100%;
		}
		.carousel-inner .item img{
			height: 350px;
			width: 100%;
		}
		.btn-yellow{
			background-color: orange;
			color: black;
			font-weight: bolder;
			font-family: 'calibri light';
		}
		h1{
			font-family: 'century';
		}
		.titre{
			text-align: right;
			top: 30%;
			font-size: 25px;
			font-weight: lighter;
		}
		.jumbotron{
			background-color: black;
			font-family: 'calibri light';
			background-size: 100% 100%;
		}
		.clr-orange{
			color: orange;
		}
		.clr-white{
			color: white;
			font-weight: bolder;
		}
		.clr-black{
			color: black;
			font-weight: bolder;
		}
		.container p{
			font-size: 20px;
			font-family: 'calibri light';
		}
	</style>
</head>
<body>
	<div class="visible-xs">
		<div class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/musichub1.jpg">
					<div class="carousel-caption" style="bottom:0;">
						<button class="btn btn-yellow">Sign In</button>
						<button class="btn btn-yellow">S'abonner</button>
					</div>
					<!--<div class="boite">hello</div>-->
				</div>
				<div class="item">
					<img src="images/headphones.webp">
					<h1 class="carousel-caption titre">
						Écoutez la bonne musique de chez vous peu importe l'endroit
					</h1>
				</div>
				<div class="item">
					<img src="images/microphone.webp">
					<h1 class="carousel-caption titre">
						Faites connaître votre musique avec <strong>Music Hub</strong>
					</h1>
				</div>
				<div class="item">
					<img src="images/concert.webp">
					<div class="carousel-caption" style="top: 20%;">
						<span style="font-size: 50px; font-weight: bolder;">Music Hub</span><br><br/>
						<button class="btn btn-yellow">Sign In</button>
						<button class="btn btn-yellow">S'abonner</button>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container" style="margin-top:;">
			<h4>Just like giving to you <span style="color: orange;">good music</span></h4>
			<h1 class="lg-title"><span style="color: orange;">Music</span> Hub</h1>
			<hr>
			<div class="jumbotron" style="background-image: url(images/record.webp);">
				<center>
					<span class="fa fa-headphones fa-5x" style="color: black;"></span>
					<h4 class="clr-white">Ecoutez la musique des nouvelles stars en continuité et sans limites</h4>
				</center>
			</div>
			<p>
				Il n y a rien de plus vivifiant que d'écouter une belle musique, un bon mélange de sonorités et de rythmes. C'est tout simplement beau la musique. <br>
				<center>
					<b>Abonnez vous, rejoignez nous pour écoutez sans limite de la belle musique de chez vous et d'ailleurs ainsi que de nouvelles stars grandissantes et très prometteuses.</b>
				</center>
			</p>
			<hr>
			<div class="jumbotron" style="background-image: url(images/vinyl.webp);">
				<center>
					<span class="fa fa-blog fa-5x" style="color: black;"></span>
					<h4 class="clr-white">Promouvoir votre musique, c'est ça notre priorité </h4>
				</center>
			</div>
			<p>
				Nous savons que vous êtes talentueux, il est temps que tout le monde le sache aussi. Sérieux, vous en avez pas marre de chanter dans la douche, ou dans des endroits qui ne vous mérite pas ?<br>
				<center>
					<b>Inscrivez vous tout simplement et laissez nous vous faire connaitre. Oui, on gère le reste, ils vont vous kiffer</b>
				</center>
			</p>
			<hr>
			<div class="jumbotron" style="background-image: url(images/records.jpg);">
				<center>
					<span class="fa fa-box-open fa-5x" style="color: white;"></span>
					<h4 class="clr-black">On vous réserve bien des choses dans notre boîte de musique</h4>
				</center>
			</div>
			<p>
				Pleines de surprises vous attendent dans Music Hub, ne les ratez pas.<br>
				<center>
					<b>Rejoignez nous</b>
				</center>
			</p>
			<hr>
			<div class="jumbotron" style="background-image: url(images/ipad.webp);">
				<center>
					<span class="fa fa-bell fa-5x" style="color: black;"></span>
					<h4 class="clr-white">Restez à l'écoute pour découvrir les artistes de chez vous</h4>
				</center>
			</div>
			<p>
				Notre site se veut dynamique et par conséquent de nouvelles stars, de nouvelles musiques seront ajoutées continuellement. <br>
				<center>
					<b>C'est le Yamo assuré !</b>
				</center>
			</p>
			<hr>
			<center>
				<button class="btn clr-black" id="btn_developpeur" style="background-color: lightgrey;">Développé par ...</button>
				<button class="btn clr-black" id="btn_s_abonner" style="background-color: lightgrey;">S'abonner</button>
				<div class="jumbotron" style="background-color: lightgrey; margin-top: 50px;" id="developpeur">
					<h1>Ulrich Ekassi</h1>
					<h4>Développeur web</h4>
					<p>
						Vous souhaitez rendre votre profil d'artiste visible sur Internet ? <br>
						Contactez moi par mail <a href="mailto: ulrichekassi2001@gmail.com" class="btn"><span class="fa fa-user fa-5x" style="color: grey"></span></a><br/>
						<div style="font-size: 15px;">Cliquez sur le petit bonhomme ci-dessus pour me contacter <span class="fa fa-arrow-up"></span></div>
					</p>
				</div>
				<div id="s_abonner" class="jumbotron" style="background-color: lightgrey; margin-top: 50px;">
					<form method="post" action="" class="form-group">
						<fieldset>
							<legend>Restez à l'écoute des nouveautés</legend>
							<input type="text" name="nom" class="form-control" required="required" placeholder="Nom & prénom" style="margin: 2%;">
							<input type="email" name="email" class="form-control" required="required" placeholder="Votre email ici" style="margin: 2%;">
							<h4>Laissez nous un commentaire</h4>
							<textarea name="commentaire" placeholder="Commentaires" class="form-control" style="margin: 2%;"></textarea>
							<input type="submit" name="abonnement" value="Valider" class="btn" style="margin: 2%; background-color: black; color: white;">
						</fieldset>
					</form>
				</div>
			</center>
			<center>
				<img src="images/musichub1.jpg" height="270" width="270">
			</center>
		</div>

	</div>



	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
</body>
</html>