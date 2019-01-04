<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $mann = $_POST["mann"]; 
        $tennn = $_POST["tennn"];
        $query = "
        INSERT INTO nganhnghe(MaNN,TenNN)  
         VALUES('$mann','$tennn')
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>