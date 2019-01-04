<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $mact = $_POST["mact"];
        $tenct = $_POST["tenct"];
        $makv = $_POST["makv"]; 
        $tt = $_POST["tt"];
        $query = "
        UPDATE congty SET TenCT='$tenct',MaKV='$makv',ThongTin='$tt' where MaCT='$mact'
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>