<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $id = $_POST["id"];
        $ten = $_POST["ten"];
        $ho = $_POST["ho"];
        $tk = $_POST["tk"];
        $mk = $_POST["mk"];
        $query = "
        UPDATE users SET id_user='$id',firsName='$ten',lastName='$ho',username='$tk',password='$mk' where id_user='$id'
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>