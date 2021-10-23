<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Customers List</title>
        <?php include 'links.php' ?>
    </head>
    <body>
        <?php include 'navbar.php'?>
        <div class="container-fluid" id="fluid-container">
        <main class="main-div">
            <h1 style="color: #172774" class="med-heading">View all Users</h1>
            <div class="center-div">
                <table class="table table-hover table-striped">
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
                    <?php

include('connection.php');
$selectquery = "SELECT * FROM `customers`";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
    <th scope="row"><?php echo $res['Sr.No.'];?></th>
    <td><?php echo $res['Name'];?></td>
    <td class="email-style table-active"><?php echo $res['Email'];?></td>
    <td><?php echo $res['Gender'];?></td>
    <td><?php echo $res['Current Balance'];?></td>
    <td><a href="details.php?id=<?php echo $res['Sr.No.']; ?>"><button class="btn home-btns" type="submit" id="transfer-btn">Transact</button></a></td>
    </tr>
    <?php
}

?>
                    </tbody>
                </table>
            </div>
        </main>
        <?php include 'footer.php' ?>
        </div>
    </body>
</html>
