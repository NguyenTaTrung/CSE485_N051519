<?php
if(isset($_POST["mact"])){
    include('../../includes/general.php');
        $query1 = "DELETE FROM vieclam WHERE MaCT='".$_POST["mact"]."'";
        $qr1=mysqli_query($cn,$query1);
        $query = "DELETE FROM congty WHERE MaCT='".$_POST["mact"]."'";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo "loi";
        };
    }
?>