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
      <link rel="stylesheet" href="styl.css">
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
               <br>
             </ul><br>  
         </div>
       

 
        <!-- /.row -->
<div class="col-sm-9">
<br>  <a href="login/logout.php" class="btn btn-primary btn-l" style="margin-left: 95%;">Logout</a>
       <!-- Page Heading -->
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Liste Des Nouveau Contact
        </h1>
    </div>
  </div>    

          
 <table class="table table-bordered table-hover">
  <thead>
    <tr>

         <th>Id</th>
         <th>Name</th>                       
         <th>Email</th>
         <th>Subject</th>
         <th>Message</th>
         <th>suprimé</th>
         <!--<th>Supprimer</th>-->
     </tr>
   </thead>

    <tbody>
      <?php 
          $connection = mysqli_connect('Localhost','root','taha','portfolio-20');
          $query = "SELECT * FROM contact";
          $load_contact_query = mysqli_query($connection,$query);

          if (!$load_contact_query) {
              die("QUERY FAILED". mysqli_error($connection));
          }

          while ($row = mysqli_fetch_array($load_contact_query)) {
              $id = $row['id'];
              $name = $row['name'];
              $email = $row['email'];
              $subject = $row['subject'];
              $message = $row['message'];
             

            // name, email, subject, message

              echo "<tr>";
              echo "<td>$id</td>";
              echo "<td>$name</td>";
              echo "<td>$email</td>";
              echo "<td>$subject</td>";
              echo "<td>$message</td>";
              //echo "<td> <a href='modify.php?modifier=$id'>UPDATE</a></td>";
              echo "<td><a href='show.php?delete=$id'>DELETE</a></td>";
              echo "</tr>";
          }

         if (isset($_GET['delete'])) {
             $delete_contact_id = $_GET['delete'];

              $delete_query = "DELETE FROM contact WHERE id = $delete_contact_id";
              $delete_contact_query = mysqli_query($connection,$delete_query);

              // header('Location: voir_produits.php');
          }

      ?>
        
          
      </tbody>
     </table>

      
   </div> 
  </div>   
  
</div>
<footer class="container-fluid">
      <p class="text-center" >You are welcome</p>
    </footer>
    
    </body>
    </html>
    


