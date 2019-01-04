<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $tenct = $_POST["tenct"];
        $makv = $_POST["makv"]; 
        $tt = $_POST["tt"];
        $query = "
        INSERT INTO congty(TenCT,MaKV,ThongTin)  
         VALUES('$tenct','$makv','$tt')
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>