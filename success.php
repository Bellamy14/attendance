<?php 
    
        $title = ' Success ';
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';
        
        if (isset($_POST['submit'])){

            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Email = $_POST['EmailAddress'];
            $Contact = $_POST['phone'];
            $DateofBirth = $_POST['DateofBirth'];
            $Specialty = $_POST['Specialty'];

            //$orig_file = $_FILES["avatar"]["tmp_name"];
            //$ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENTION);
            //$target_dir = 'uploads/';
            //$destination = "$target_dir$Contact.$ext";
            //move_uploaded_file($orig_file,$destination);

            




            $isSuccess = $crud->insertAttendees($FirstName, $LastName, $DateofBirth, $Email, $Contact, $Specialty);
            $SpecialtyName = $crud->getSpecialtyById($Specialty);

            

            if($isSuccess){

                    //echo '<h1 class="text-center text-success"> You Have Been Registered !</h1>';
                    include 'includes/successmessage.php';
            }

            else{

                    //echo '<h1 class="text-center text-danger"> There was an error in processing</h1>';
                    include 'includes/errormessage.php';

            }

        }
        
    ?> 

        

        <!-- Get method -->
        <!-- <div class="card" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">

                        <?php //echo   $_GET['FirstName'] . '  ' .    $_GET['LastName1']; ?>
                </h5>

                <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo   $_GET['Specialty']; ?>

                </h6>

                <p class="card-text">
                Date of Birth: <?php //echo   $_GET['DateofBirth']; ?>

                </p>

                <p class="card-text">

                Email: <?php //echo   $_GET['exampleInputEmail1']; ?>

                </p>

                <p class="card-text">

                Contact: <?php //echo   $_GET['phone']; ?>

                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            
            </div>

        </div> -->


        
        <div class="card" style="width: 18rem;">

            <div class="card-body">


                <h5 class="card-title">

                <?php echo   $_POST['FirstName'] . '  ' .    $_POST['LastName']; ?>
                
            </h5>

                <h6 class="card-subtitle mb-2 text-muted">

                <?php echo   $SpecialtyName['name']; ?>

                </h6>

                <p class="card-text">

                Date of Birth: <?php echo   $_POST['DateofBirth']; ?>

                </p>

                <p class="card-text">

                Email: <?php echo   $_POST['EmailAddress']; ?>

                </p>

                

                <p class="card-text">

                Contact: <?php echo   $_POST['phone']; ?>

                </p>

                
            </div>
        </div>

        <?php
        
            echo   $_POST['FirstName'];
            echo   $_POST['LastName'];
            echo   $_POST['DateofBirth'];
            echo   $_POST['Specialty'];
            echo   $_POST['EmailAddress'];
            echo   $_POST['phone'];
            
        ?>
        <br>
        <br>
        <br>
        <br>


    <?php require_once 'includes/footer.php'; ?>