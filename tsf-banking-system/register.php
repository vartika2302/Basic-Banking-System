<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration Form</title>
        <?php include 'links.php' ?>
    </head>
    <body>
        <?php include 'navbar.php' ?>
        <div class="container-fluid" id="register-container">
        <div class="row">
        <div class="col-lg-6">
        <img src="images/Checklist.jpg" alt="register-img" id="register-img">
        </div>
        <div class="col-lg-6">
        <form method="POST" class="container-fluid" id="formm">
    <h2 class="med-heading" style="color: #172774">Register to Bank of Sparks</h2>
    <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="user-name" type="text" class="form-control" id="inputName3" required placeholder="Enter your name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="user-email" type="email" class="form-control" id="inputEmail3" required placeholder="Enter your email"> 
    </div>
  </div>
  

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="FEMALE" checked>
        <label class="form-check-label" for="gridRadios1">
          Female
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="MALE">
        <label class="form-check-label" for="gridRadios2">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="OTHER">
        <label class="form-check-label" for="gridRadios3">
          Other
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <label for="inputBalance3" class="col-sm-2 col-form-label">Current balance</label>
    <div class="col-sm-10">
      <input name="balance" type="number" class="form-control" id="inputBalance3" required placeholder="Enter current balance">
    </div>
  </div>
  <input type="submit" name="submit" class="home-btns btn" value="Register">
</form>
        </div>
        </div>
        </div>
        
        
<?php include 'footer.php' ?>
    </body>
</html>


<?php

include('connection.php');
if(isset($_POST['submit'])){
    $user_name = $_POST['user-name'];
    $user_email = $_POST['user-email'];
    $gender = $_POST['gender'];
    $balance = $_POST['balance'];
    //$button = "<input type=\"submit\" name=\"transfer\" value=\"Transfer Now\">";
    $insertquery = "INSERT INTO `customers`(`Name`, `Email`, `Gender`, `Current Balance`) VALUES ('$user_name','$user_email','$gender','$balance')";

    $res = mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("Data inserted successfully");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data not inserted");
        </script>
        <?php
    }
}

?>

