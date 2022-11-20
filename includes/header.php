<?php

    include_once 'includes/session.php';

    


?>


<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <link rel = "stylesheet" href = "css/site.css" />

    <title> Attendance - <?php echo $title ?></title>



</head>

  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
  <div class="container-fluid">
    
  <a class="navbar-brand" href="index.php">IT Conference</a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      
     <span class="navbar-toggler-icon"></span>
    
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
       <div class="navbar-nav mr-auto">
        
        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only"></span></a>
        
        <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>
        
      </div>

      <div class="navbar-nav ml-auto">

        <?php

            if(!isset($_SESSION['userid'])){
        ?>
          <a class="nav-item nav-link" href="login.php">Login<span class="sr-only"></span></a>

        <?php }else{ ?>

          <a class="nav-item nav-link" href="#"><span>Hello<?php echo $_SESSION['username']?>! </span><span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="logout.php">Logout<span class="sr-only"></span></a>
        
        <?php } ?>

      </div>

    </div>

  </div>

</nav>

    <div class ="container">

    

<br/>