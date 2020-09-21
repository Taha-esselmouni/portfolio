
<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: index.php');
  }

?>

<html lang="en">
    <head>
      <title>admin </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
          height: 700px ;
        }
        
        /* Set gray background color and 100% height */
        .sidenav {
         background-color : #99CCFF;
          height: 100%;
        }
        
        /* Set black background color, white text and some padding */
        footer {
          background-color: #99CCFF;
          color: white;
          padding: 15px;
        }
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
          .sidenav {
            height: auto;
            padding: 15px;
          }
          .row.content {height: auto;} 
        }
      </style>
    </head>
    <body>
    
    <?php
     // Create database connection
  
     $conn = mysqli_connect('Localhost','root','taha','portfolio-20');
  
  
  // Initialize message variable
  // $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get first image name
    $image = $_FILES['image']['name'];
    $image_uploaded_temp = $_FILES['image']['tmp_name'];

          
    // Get url
    $lien = $_POST['lien'];
  	// Get title
    $titre = $_POST['titre'];
    // Get description
  	$description = $_POST['description'];

  	// image file directory
  	$target_file = "../images/$image";

  	$sql = "INSERT INTO projet (image, lien, titre, description) VALUES ('$image', '$lien', '$titre', '$description')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($image_uploaded_temp, $target_file)) {
      $msg = "projet uploaded successfully";
      
  	}else{
  		$msg = "Failed to upload projet";
    }
    header('Location: show-project.php');
  }

  //$result = mysqli_query($db, "SELECT * FROM project");
  

?>

    <div class="container-fluid">
      <div class="row content">
         <div class="col-sm-2 sidenav">
            <a href="index.php"><img src="./images/logo.png" alt="logo taha " style ="margin-top :7%"></a><br>
             <ul class="nav nav-pills nav-stacked"><br>
              <li class="active"><a href="show.php"style="margin-top: 34%;">Nouveau contact</a></li> <br>
              <li class="active"><a href="project.php">ajouter les projets</a></li> <br>
              <li class="active"><a href="show-project.php">voir les projets</a></li><br> 
              
             </ul><br>  
         </div>
         
          <div class="col-sm-9">
        <br>  <a href="login/logout.php" class="btn btn-primary btn-l" style="margin-left: 95%;">Logout</a>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ajouter un Projet
                            
                           
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="project.php" method="post" enctype="multipart/form-data">    
                    
                    <div class="form-group">
                        <label for="pro_file">Ajouter Une image</label>
                        <input type="file"  name="image">
                    </div>

                    <div class="form-group">
                        <label for="lien">Ajouter Un lien</label>
                        <input type="text"  name="lien">
                    </div>
             
                    <div class="form-group">
                        <label for="titre">Titre de Projet</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    
                    <div class="form-group">
                        <label for="description">Description de Projet</label>
                        <textarea class="form-control "name="description" id="" cols="30" rows="5">
                        </textarea>
                    </div>
                                  
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="upload" value="Ajouter un projet">
                    </div>


             </form>


            </div>


          </div>

      </div>
    </div>
    
    <footer class="container-fluid">
      <p class="text-center" >You are welcome</p>
    </footer>
    
    </body>
    </html>