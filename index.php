    
    <?php 
    
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    $results = $crud->getSpecialties();
?>



<h1 class="text-center"> Registration for I.T Conference </h1>

<form method= "post" action="success.php">


    <div class="mb-3">

        <label for="FirstName" class="form-label"> First Name</label>
        <input required type="text" class="form-control" id="FirstName" name="FirstName" aria-describedby="firstnameHelp">
        
    </div>

    <div class="mb-3">

        <label for="LastName" class="form-label"> Last Name</label>
        <input required type="text" class="form-control" id="LastName"  name="LastName" aria-describedby="lastname">
        
    </div>

    <div class="mb-3">
        
        <label for="DateofBirth" class="form-label"> Date of Birth </label>
        <input type="text" class="form-control" id="DateofBirth" name="DateofBirth" aria-describedby="DateofBirthHelp">
        
    </div>

    <div class="form-group">

        <label for="Specialty"> Specialty </label>
        <select class="form-control" type="button" id="Specialty" name="Specialty" aria-expanded="false">

        <?php while($r = $results->fetch(PDO :: FETCH_ASSOC)) { ?>
            
            <option value= " <?php echo $r ['specialty_id'] ?>"> <?php echo $r['name']; ?> </option> 


        <?php } ?>


        </select>
        
        
    </div>

    <br>
    
    <div class="mb-3">

        <label for="EmailAddress" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="EmailAddress" name="EmailAddress" aria-describedby="emailHelp">
        <div id="emailaddress" class="form-text">We'll never share your email with anyone else.</div>

    </div>

    <div class="mb-3">

        <label for="phone" class="form-label"> Contact Number </label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
        <div id="phone" class="form-text">We'll never share your number with anyone else.</div>

    </div>

        </br>
    <div class="custom-file">
    
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
        <label class="custom-file-label" for="avatar"> Choose File </label>
        <div id="avatar" class="form-text text-gray"> (File Upload is Optional) </div>

    </div>

        </br>
    
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    <br>
    <br>
    <br>
    


<?php require_once 'includes/footer.php'; ?>

