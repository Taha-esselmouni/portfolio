<?php
$conn = mysqli_connect('Localhost','root','taha','portfolio-20');
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = 'SELECT * FROM projet';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($conn, $sql) ;
//or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
if (!$req) {
  die("QUERY FAILED". mysqli_error($conn));
 }

// on va scanner tous les tuples un par un
while ($row = mysqli_fetch_array($req)) {
  $image = $row['image'];
  $lien = $row['lien'];
  $titre = $row['titre'];
  $description = $row['description'];
  
  
  

 echo"<div class='wow flipInX'>
								 <div class= 'col-sm'>   <a href='$lien' class='' target='_blank'>
										<img src='images/$image' class=' col-lg-4 masonry-column' alt=''>
										
									</a> </div>
							    </div>";
}
  
  
?>











			<!-- <section id="portfolio" class="portfolio-area-">
				<div class="container wrapper">
					<div class="porfolio-head">
						<h2>PORTFOLIO</h2>
						<h6>Parmi mes projets</h6>
					</div>

					<div class="portfolio-area container">
						<div class="row masonry-grid">
							<div class="col-md-6 col-sm-12 col-lg-4 masonry-column">
							    <div class="wow flipInX">
								    <a href="https://github.com/Taha-esselmouni/MaquetteN1" class="" target="_blank">
										<img src="images/Mock-up Web Version.png" class="" alt="">
										<span>Mock-up Web Version</span>
									</a>
							    </div>
							    <div class="wow flipInX">
							    	<a href="http://www.Youcode.ma/" class="" target="_blank">
										<img src="images/youcode.png" class="" alt="">
										<span>Youcode</span>
									</a>
							    </div>
							</div>

						  	<div class="col-md-6 col-sm-12 col-lg-4 masonry-column">
							    <div class="wow flipInX">
							    	<a href="https://github.com/Apter-X/Ecoteam/tree/master/03.%20Refonte%20d%E2%80%99un%20design" target="_blank">
										<img src="images/mock-up_high_fidelity_web_agency.png" class="" alt="">
										<span>mock-up_high_fidelity_web_agency</span>
									</a>
							    </div>
							 
						  	</div>

						 	   

						  	<div class="col-md-6 col-sm-12 col-lg-4 masonry-column">
						    	<div class="wow flipInX ">
							     	<a href="https://github.com/Taha-esselmouni/-Developpement-Webagency-" class="" target="_blank">
										<img src="images/Developpement-Webagency.png" class="edelec" alt="">
										<span>Developpement-Webagency</span>
							    </div>
							</div>

                <div class="col-md-6 col-sm-12 col-lg-8 masonry-column" style="margin-left: 34%;">
								<div class="wow flipInX ">
								
							     	<a href="https://github.com/Taha-esselmouni" target="_blank">
										<img src="images/HTML-CSS3 Training.png" class="width-imgv" alt="">
										<span>HTML-CSS3 Training</span>
									</a>
							    </div>
							</div>
						

						
			
			</section> -->