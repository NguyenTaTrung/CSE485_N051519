<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $makv = $_POST["makv"];
        $tenkv = $_POST["tenkv"];
        $query = "
        UPDATE khuvuc SET TenKV='$tenkv',MaKV='$makv' where MaKV='$makv'
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>