<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">
  <style>

    table{
        background-color:cyan  ;
        border: 2px solid red;
        text-align:center;
        margin-bottom: 3px ;
        
    }
    th{
        border: 1.5px dashed black;
    }
    td{
        border: 1px solid black;
        font-family: Noto Nastaliq urdu ;
    }

    </style>
    
</head>
<body>
<?php
 //define varible for connection
 define("HOSTNAME","localhost");
 define("USERNAME","root");
 define("PASSWORD","");
 define("DATABASE","pchs");

 // Connect to MySQL
$mysqli = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data
$bank = $mysqli->query("SELECT * FROM tbl_bank ");

$block = $mysqli -> query ("SELECT * FROM tbl_BLOCK")

// Display data in a form
?> <table> <?php
echo "<tr><th>Sr</th><th>tbl_bank Name</th><th>Full Name</th></tr>";

    while ($row = $bank -> fetch_assoc()) {
    echo "<tr><td>".$row['SR']."</td><td>".$row['BANK_NAME']."</td><td>".$row['FULL NAME']."</td></tr>";
    
}
?></table> 
<table>
    <tr><th>BlockNo</th><th>BlockName</th><th>BlockNameU</th></tr>

    <?php
        while ($block_row  = $block -> fetch_assoc()) {
            echo "<tr><td>".$block_row['BlockNo']."</td><td>".$block_row['BlockName']."</td><td>".$block_row['BlockNameU']."</td></tr>";
        }
    //  echo phpversion();
            ?>
</table>

</body>
</html>
