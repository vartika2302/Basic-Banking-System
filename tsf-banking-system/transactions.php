<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Transactions</title>
        <?php include 'links.php' ?>
    </head>
    <body>
        <?php include 'navbar.php' ?>
        <div class="container-fluid fluid-container">
        <main class="main-div">
            <h1 style="color: #172774" class="med-heading">Transactions</h1>
            <div class="center-div">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Receiver</th>
                            <th scope="col">Amount Transferred</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('connection.php');
                            $select_query = "SELECT * FROM `transactions`";
                            $query = mysqli_query($con,$select_query);
                            $nums = mysqli_num_rows($query);
                            while($res = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $res['Id']; ?></th>
                                    <td><?php echo $res['Sender']; ?></td>
                                    <td><?php echo $res['Receiver']; ?></td>
                                    <td><?php echo $res['Amount Transferred']; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </main>
       
        </div>
         <?php include 'footer.php' ?>
    </body>
</html>