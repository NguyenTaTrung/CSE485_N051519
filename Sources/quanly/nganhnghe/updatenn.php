<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $mann = $_POST["mann"];
        $tennn = $_POST["tennn"];
        $query = "
        UPDATE nganhnghe SET TenNN='$tennn',MaNN='$mann' where MaNN='$mann'
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>