<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="JobBoard - HTML Template" />
	<meta property="og:title" content="JobBoard - HTML Template" />
	<meta property="og:description" content="JobBoard - HTML Template" />
	<meta property="og:image" content="JobBoard - HTML Template" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>JobBoard - entreprise</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->
</head>
<body id="bg">
<div class="page-wraper">

 <!-- header -->
 <header class="site-header mo-left header fullwidth">
	<!-- main header -->
	<div class="sticky-header main-bar-wraper navbar-expand-lg">
		<div class="main-bar clearfix">
			<div class="container clearfix">
				<!-- website logo -->
				<div class="logo-header mostion">
					<a href="index-2.html"><img src="images/logo.png" class="logo" alt=""></a>
				</div>
			
			 
				<!-- extra nav -->
				<div class="extra-nav">
					<div class="extra-cell">
					<a href="#saisir"  class="site-button"><i class="fa fa-user"></i> Enregistrer son profil</a>
						<a href="#" class="site-button"><i class="fa fa-user"></i> modifier son profil</a>
						<a href="coming-soon.html" class="site-button"><i class="fa fa-lock"></i>Deconnexion</a>
                        
					</div>
				</div>
			  
				
						
				</div>
			</div>
		</div>
	</div>
	<!-- main header END -->
</header>
<!-- header END -->
    
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Votre profil</h1>
					
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Submit Resume -->
			<div class="section-full bg-white submit-resume content-inner-2">
				<div class="container">
					<form method="post" action="upload.php" enctype="multipart/form-data" id="saisir">
						
						
						<div class="form-group">
							<label>Region</label>
							<input type="text" class="form-control" placeholder="region" name="region">
						</div>
						<div class="form-group">
							<label>Titre professionnel</label>
							<input type="text" class="form-control" placeholder="Develloppeur Web" name="titre">
						</div>
						<div class="form-group">
							<label>description</label>
							<textarea class="form-control" placeholder="Description" name="description"></textarea>
						</div>

						<div class="form-group">
							<label>Adresse</label>
							<input type="text" class="form-control" placeholder="Douala" name="adresse">
						</div>
						
						<div class="form-group">
							<label>Salaire minimum/h (XFA) (optionnel)</label>
							<input type="text" class="form-control" placeholder="50000 (XFA)" name="salaire">
						</div>
						<div class="form-group">
							<label>Type de travail</label>
							<select name="typeT">
								<option>plein Temps </option>
								<option>Temps partagé</option>
							
							</select>
						</div>
						
						<div class="form-group">
							<label>competances(optionnel)</label>
							<input type="text" class="form-control" placeholder="vos competences" name="skills1">
							<input type="text" class="form-control" placeholder="vos competences" name="skills2">
							<input type="text" class="form-control" placeholder="vos competences" name="skills3">
							<input type="text" class="form-control" placeholder="vos competences" name="skills4">
						</div>
                          
						<label for="cv">Importez votre CV</label>

						<div class="custom-file" class="cvimport" >
						<input type="file" class="custom-file-input" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
						<label class="custom-file-label" for="cv" >Sélectionner un fichier</label>
						</div>

						<button type="submit" class="site-button" >Soumettre</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	 <!-- Footer -->
<footer class="site-footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
					<div class="widget">
						<img src="images/logo-white.png" width="180" class="m-b15" alt=""/>
						<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..</p>
						<div class="subscribe-form m-b20">
							
						</div>
						<ul class="list-inline m-a0">
							<li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
							
							<li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
						
							<li><a href="#" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
					<div class="widget border-0">
						<h5 class="m-b30 text-white">Liens utiles</h5>
						<ul class="list-2 list-line">
							<li><a href="#">JobBoard</a></li>
							<li><a href="about-us.html">A propos</a></li>
							<li><a href="#">Chercheurs</a></li>
							<li><a href="#">entreprises</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">S'inscrire</a></li>
							<li><a href="#">Connexion</a></li>
				
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
					<div class="widget border-0">
						<h5 class="m-b30 text-white">Offres disponibles</h5>
						<ul class="list-2 w10 list-line">
							<li><a href="#">Éducation Formation</a></li>
							<li><a href="#">Restaurant</a></li>
							<li><a href="#">Comptabilité/finances</a></li>
							<li><a href="#">Data scientist</a></li>
						  
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer bottom part -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center"><span><a target="_blank" href="">Etudiants inf2</a></span></div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer END -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='js/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="plugins/paroller/skrollr.min.js"></script><!-- PAROLLER -->
<script type="text/javascript">

			$("#exp-slider-range").slider({
				range: true,
				min: 0,
				max: 10,
				//values: [0, 10],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val( min + " year - " + max + " year");
				}
			});
			
			$("#salary-slider-range").slider({
				range: true,
				min: 10,
				max: 100,
				//values: [10, 1000],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val(min + "K - " + max + "K");
				}
			});
		
</script>
</body>


</html>
