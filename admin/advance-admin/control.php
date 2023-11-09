<?php
include('connect.php');
class data
{

    public function insert_product($name,$number,$pic,$cate,$date,$price)
    {
        global $conn;
        $insert="insert into product (NamePro,NumberPro,Picture,CategoryPro,DatePro,PricePro)
        valune('$name','$number','$pic','$cate','$date','$price')";
        $run=mysqli_query($conn,$insert);
        return $sun;
    }
    }
?>