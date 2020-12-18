<?php
include 'config.php';

$useremail = $_POST['userEmail'];
$userpassword = $_POST['userPassword'];


//  echo $useremail;
//  echo $userpassword."<br>";




$result = mysqli_query($Con, "SELECT * FROM `tblform` where Email ='$useremail' and Password = '$userpassword'");
if(mysqli_num_rows($result)  ){
    echo 'Login Successfully';

}
else{
    echo 'Invalid Password Please Enter Valid Password';
}
