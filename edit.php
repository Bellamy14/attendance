<?php 
    
    $title = 'Edit Record';
    require_once 'includes/header.php'; 
    //require_once 'includes/authentication_check.php';
    require_once 'db/conn.php';
    
    $results = $crud->getSpecialties();


    if (!isset($_GET['id']))
    {

        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");

    }

        else{

                $id= $_GET['id'];
                $attendee = $crud->getAttendeeDetails($id);

        
    
?>



<h1 class="text-center"> Edit Record </h1>

<form method= "post" action="editpost.php">

<input type="hidden" name="id" value="<?php echo $attendee ['attendee_id'] ?>" />

    <div class="mb-3">

        <label for="FirstName" class="form-label"> First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee ['firstname'] ?>" id="FirstName" name="FirstName" aria-describedby="firstnameHelp">
        
    </div>

    <div class="mb-3">

        <label for="LastName" class="form-label"> Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee ['lastname'] ?>"id="LastName"  name="LastName" aria-describedby="lastname">
        
    </div>

    <div class="mb-3">

        <label for="DateofBirth" class="form-label"> Date of Birth </label>
        <input type="text" class="form-control" value="<?php echo $attendee ['dateofbirth'] ?>" id="DateofBirth" name="DateofBirth" aria-describedby="DateofBirthHelp">
        
    </div>

    <div class="form-group">

        <label for="Specialty"> Specialty </label>
        <select class="form-control" type="button" value="<?php echo $attendee ['specialty'] ?>" id="Specialty" name="Specialty" aria-expanded="false">

        <?php while($r = $results->fetch(PDO :: FETCH_ASSOC)) { ?>
            
            <option value= " <?php echo $r ['specialty_id'] ?>" <?php if($r ['specialty_id'] == 
            
            $attendee['specialty_id']) echo 'selected'?>>
            
                    <?php echo $r['name']; ?> 
        
            </option> 


        <?php } ?>


        </select>
        
        
    </div>

    <div class="mb-3">

        <label for="EmailAddress" class="form-label">Email address</label>
        <input type="email" class="form-control" value="<?php echo $attendee ['emailaddress'] ?>" id="EmailAddress" name="EmailAddress" aria-describedby="emailHelp">
        <div id="emailaddress" class="form-text">We'll never share your email with anyone else.</div>
    
    </div>

    <div class="mb-3">

        <label for="phone" class="form-label"> Contact Number </label>
        <input type="text" class="form-control" value="<?php echo $attendee ['contactnumber'] ?>" id="phone" name="phone" aria-describedby="phoneHelp" >
        <div id="phone" class="form-text">We'll never share your number with anyone else.</div>
    
    </div>

    
        <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
        <a href ="viewrecords.php" class= "btn btn-default" >Back to List</a>
</form>

        <?php } ?>

    <br>
    <br>
    <br>
    <br>
    

<?php require_once 'includes/footer.php'; ?>