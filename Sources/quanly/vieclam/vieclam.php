<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $tenvl = $_POST["tenvl"];
        $mact = $_POST["mact"]; 
        $mann = $_POST["mann"];
        $tt = $_POST["tt"]; 
        $query = "
        INSERT INTO vieclam (TenVL,MaCT,MaNN,TrangThai)  
         VALUES('$tenvl','$mact','$mann','$tt')
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>