<?php
include('connect.php');
class data
{

    public function select_product()
    {
        global $conn;
        $select="select* from product";
        $run=mysqli_query($conn,$select);
        return $run;
    }
    }
    function login($user,$pass)
    {

        global $conn;
        $select="select* from user where username='$user'and password='$pass'";
        $run=mysqli_query($conn,$select);
        return $run;
    }
?>