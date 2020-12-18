<?php
                    include "config.php";

                    $NAME = $_POST['name'];
                    $EMAIL = $_POST['email'];
                    $NUMBER = $_POST['number'];
                    $PASSWOR = $_POST['password'];
                   


                    mysqli_query($Con, "INSERT INTO `tblform`(`Name`, `Email`, `Number`, `Password`) VALUES('$NAME','$EMAIL',' $NUMBER','$PASSWOR') ");
                  
                    header("location:login.php")
                    ?>