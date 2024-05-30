    <?php 
    include('header.php');?>
    <?php include('dbconn.php') ;?>   
    
    <div class="box1">
    <h1>All Bank Detail</h1>
    <button type="button" class="btn btn-primary" data-toggle= "modal" data-target="#exampleModal" >Add Bank</button>
    </div>

    <table class="table table-hover   table-striped table-bordered" >
        <thead>
            <tr>
                <th>SR</th>
                <th>Bank Name</th>
                <th>Full Name</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
     <?php   // SELECT QUERUY
    $query = "SELECT * FROM tbl_bank";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } 
    while($row = mysqli_fetch_assoc($result)) {
     
    ?>
            <tr>
                <td>  <?php echo $row['SR']; ?></td>
                <td><?php echo $row['BANK_NAME']; ?></td>
                <td><?php echo $row['FULL NAME']; ?></td>
                <td><a href="update.php?id=<?php echo $row['SR']; ?>" class="btn btn-success">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['SR']; ?>" class="btn btn-danger">Delete</a></td>

            </tr>
            <?php } ?>
        </tbody>
    </table>

<?php 
            if(isset($_GET['message'])) {
                echo "<h6 class='msg'>".$_GET['message']."</h6>";
            }
    ?>
    <?php 
            if(isset($_GET['insert_data'])) {
                echo "<h6 class='ins'>".$_GET['insert_data']."</h6>";
            }
    ?>


<!-- Modal -->
<form action="insert_data.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="SR">SR</label>
            <input type="text" class="form-control" name="SR"  placeholder="Enter SR">
        </div>
        <div class="form-group">
            <label for="Bank_name">Bank Name</label>
            <input type="text" class="form-control" name="Bank_name"  placeholder="Enter Bank_name">
        </div>
        <div class="form-group">
            <label for="Full_name">Full Name</label>
            <input type="text" class="form-control" name="Full_name"  placeholder="Enter Full_name">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="add_bank" value="Add" class="btn btn-success">
      </div>
    </div>
  </div>
</div>
</form>
    <?php include('footer.php');
   