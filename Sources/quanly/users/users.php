<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $ten = $_POST["ten"];
        $ho = $_POST["ho"]; 
        $tk = $_POST["tk"];
        $mk = $_POST["mk"]; 
        $query = "
        INSERT INTO users (firsName,lastName,username,password)  
         VALUES('$ten','$ho','$tk','$mk')
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>