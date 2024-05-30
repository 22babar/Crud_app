<?php include 'header.php'; ?>
<?php include 'dbconn.php'; ?>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

    $query = "SELECT * FROM `tbl_bank` WHERE `SR` = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query Failed'. mysqli_error());}
        else{
            $row = mysqli_fetch_assoc($result);
            print_r($row);
        }
        ?>
        
     <?php 

    if(isset($_POST['update_bank'])){
            if(isset($_GET['new_id'])){
                $new_id = $_GET['new_id'];
            

        $SR = $_POST['SR'];
        $Bank_name = $_POST['Bank_name'];
        $Full_name = $_POST['Full_name'];
       
        $query = "UPDATE `tbl_bank` SET `SR` = '$SR', `BANK_NAME` = '$Bank_name', `FULL NAME` = '$Full_name' WHERE `tbl_bank`.`SR` = $new_id";
        $result = mysqli_query($conn, $query);
       
        if (!$result) {
            die('Query Failed' . mysqli_error());
        }else{
            header('Location: index.php');
        }

    }

    }

    ?>

 <form action="update.php?new_id=<?php echo $id; ?>" method="post">

 <div class="form-group">
<label for="SR">SR</label>
<input type="text" class="form-control" name="SR"  value="<?php echo $row['SR'] ; ?>" >
</div>
<div class="form-group">
<label for="Bank_name">Bank Name</label>
<input type="text" class="form-control" name="Bank_name" value = " <?php echo $row['BANK_NAME']; ?>" >
</div>
<div class="form-group">
<label for="Full_name">Full Name</label>
<input type="text" class="form-control" name="Full_name" value = " <?php echo $row['FULL NAME']; ?>" >
</div>


<input type="submit" name="update_bank" value="submit" class="btn btn-success">
</form>







<?php include 'footer.php'; ?>

