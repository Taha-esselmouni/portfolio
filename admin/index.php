
<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: index.php');
  }

?>


<html lang="en">
    <head>
      <title>admin TH</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="styl.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
          height: 90% ;
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
         </div>
      </div>
    </div>
    
    <footer class="container-fluid">
      <p class="text-center" >You are welcome</p>
    </footer>
    
    </body>
    </html>
    