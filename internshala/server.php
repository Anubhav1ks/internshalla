<?php
$con=mysqli_connect("localhost","root","","internshalla"); //line2-> change db_username and db_password  

if (mysqli_connect_errno()) {
    
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

?>