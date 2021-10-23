<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Details</title>
    <?php include 'links.php' ?>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <div style="color: #172774" class="container-fluid fluid-container" style="margin-top: -40px;">
    <h1 class="med-heading">Wanna transfer money?? Here you go.</h1>
    <?php
include 'connection.php';
$ids = $_GET['id'];
$select_query = "SELECT * FROM `customers` WHERE `Sr.No.`={$ids}";
$res = mysqli_query($con,$select_query);
if(!$res){
    echo 'Error:'.$select_query.'<br>'.mysqli_error($con);
}
else{
    $rows = mysqli_fetch_array($res);
}
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sr.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Current Balance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $rows['Sr.No.'] ?></th>
      <td><?php echo $rows['Name']?></td>
      <td class="table-active"><?php echo $rows['Email'] ?></td>
      <td><?php echo $rows['Gender'] ?></td>
      <td><?php echo $rows['Current Balance']?></td>
    </tr>
  </tbody>
</table>


<div class="card text-center">
  
  <div class="card-body">

  <form class="row g-3" method="POST" action="">

  <div class="col-12">
    <label for="usertotransfer" class="form-label">Transfer to</label><br>
    <select style="width: 80%" id="usertotransfer" class="form-select" name="usertotransfer">
      <option selected disabled>Choose</option>
      <?php
          include 'connection.php';
          $ids = $_GET['id'];
          $select_query = "SELECT * FROM `customers` WHERE `Sr.No.`!=$ids";
          $res=mysqli_query($con,$select_query);
          if(!$res){
              echo 'Error:'.$select_query.'<br>'.mysqli_error($con);
          }
          while($rows = mysqli_fetch_array($res)){
              ?>
              <option value="<?php echo $rows['Sr.No.']; ?>">
              <?php echo $rows['Name']; ?>(Current Balance: <?php echo $rows['Current Balance']; ?>)
              </option>
              <?php
          }
          ?>
    </select>
  </div>
  <br><br><br>
  <div class="col-12">
    <label for="inputMoney" class="form-label">Amount to transfer</label>
    <input type="number" class="form-control" id="inputMoney" name="amount">
  </div>
  <br><br><br><br>
  <div class="col-12">
    <button name="submit" type="submit" class="btn home-btns">Transfer</button>
  </div>
</form>
  </div>
  
</div>
    </div>

        <?php include 'footer.php' ?>
  </body>
</html>


<?php
include 'connection.php';
 if(isset($_POST['submit'])){
     $transferredfrom = $_GET['id'];
     $transferredto = $_POST['usertotransfer'];
     $amounttotransfer = $_POST['amount'];

     $select_query = "SELECT * FROM `customers` WHERE `Sr.No.`=$transferredfrom";
     $res = mysqli_query($con,$select_query);
     $rows1 = mysqli_fetch_array($res);

     $select_query = "SELECT * FROM `customers` WHERE `Sr.No.`=$transferredto";
     $res = mysqli_query($con,$select_query);
     $rows2 = mysqli_fetch_array($res);

     //constraint to check that if the user had enterred negative values
     if($amounttotransfer < 0){
         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Negative amount can\'t be transferred!!')";
         echo "</script>";
     }

     //constraint to check if the amount enterred is zero
     else if($amounttotransfer == 0){
         echo "<script type='text/javascript'>";
         echo 'alert("Sorry! Zero amount can\"t be transferred")';
         echo '</script>';
     }

     //constraint to check if the amount enterred is greater than the current balance
     else if($amounttotransfer > $rows1['Current Balance']){
         echo '<script type="text/javascript>';
         echo 'alert("Sorry! Insufficient balance")';
         echo '</script>';
     }

     else{
        //deducting amount from sender's account
      
       
        $newbalance = $rows1['Current Balance'] - $amounttotransfer;
        $sql = "UPDATE `customers` SET `Current Balance`=$newbalance WHERE `Sr.No.`=$transferredfrom";
        mysqli_query($con,$sql);

        //adding amount to receiver's account
        $newbalance = $rows2['Current Balance'] + $amounttotransfer;
        $sql = "UPDATE `customers` SET `Current Balance`=$newbalance WHERE `Sr.No.`=$transferredto";
        mysqli_query($con,$sql);

        $sender = $rows1['Name'];
        $receiver = $rows2['Name'];
        $date = date("Y/m/d");
        $time = date("h:i:sa");

        $select_query = "INSERT INTO `transactions`(`Sender`,`Receiver`,`Amount Transferred`) VALUES ('$sender','$receiver','$amounttotransfer')";
        $result = mysqli_query($con,$select_query);

        if($result){
          echo "<script type='text/javascript'>";
          echo 'alert("Congratulations! Transaction successful.")';
          echo "</script>";
        }

        $newbalance=0;
        $amounttotransfer=0;
     }
 }
?>
