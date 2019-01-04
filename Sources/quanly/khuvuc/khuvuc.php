<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $makv = $_POST["makv"]; 
        $tenkv = $_POST["tenkv"];
        $query = "
        INSERT INTO khuvuc(MaKV,TenKV)  
         VALUES('$makv','$tenkv')
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>