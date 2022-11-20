<?php

        require_once 'db/conn.php';

        $id= $_POST['id'];

        if (isset($_POST['submit'])){

            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Email = $_POST['EmailAddress'];
            $Contact = $_POST['phone'];
            $DateofBirth = $_POST['DateofBirth'];
            $Specialty = $_POST['Specialty'];

            $results = $crud->editAttendee($id,$FirstName, $LastName, $DateofBirth, $Email, $Contact, $Specialty);
            
            

            if($results){

                header("Location: viewrecords.php");
                
            }
        }

        else{

            
                //echo('error') ;
                include 'includes/errormessage.php';
        
            }

    
    
       
?>