<?php include('dbconn.php') ;?>   
<?php

    if(isset($_POST['add_bank'])) {
      
        $bankSr = $_POST['SR'];
        $bankName = $_POST['Bank_name'];
        $bankfull = $_POST['Full_name'];
    
        if($bankSr == "" || empty($bankSr)){
            header('location: index.php?message=Please enter Bank Serial Number');
        }else{
            $query = "INSERT INTO tbl_bank(`SR`, `Bank_name`, `Full name`) VALUES('$bankSr', '$bankName', '$bankfull')";
            $result = mysqli_query($conn, $query);

            if(!$result) {
                die("Query Failed".mysqli_error($conn));
                }
                else{
                    header('location: index.php?insert_data=Data Inserted Successfully');
                }
            }
    }

        
                // if($bankSr == "" || empty($bankSr)){
                //     echo "<script>alert('Please enter Bank Serial Number')</script>";
                // }else if($bankName == "" || empty($bankName)){
                //     echo "<script>alert('Please enter Bank Name')</script>";
                // }else if($bankfull == "" || empty($bankfull)){
                //     echo "<script>alert('Please enter Full Name')</script>";
                // }else{
                //     $query = "INSERT INTO tbl_bank(SR, Bank_name, Full_name) VALUES('$bankSr', '$bankName', '$bankfull')";
                //         echo "submitted";
                //     }
                // }
?>