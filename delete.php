<?php 
    
    //require_once 'includes/authentication_check.php';
    //$title = 'Edit Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if(!$_GET['id'])
    
    {

        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");

    }

        else{
                $id= $_GET['id'];
        }      
    
    $results = $crud->deleteAttendee($id);

    if($results){

        header("Location: viewrecords.php");
    }

    else{

        //echo'' ;
        include 'includes/errormessage.php';
    
    }

    
?>