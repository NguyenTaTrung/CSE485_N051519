<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $mavl = $_POST['mavl'];
        $tenvl = $_POST["tenvl"];
        $mact = $_POST["mact"];
        $mann = $_POST["mann"];
        $tt = $_POST["tt"];
        $query = "
        UPDATE vieclam SET MaVL='$mavl',TenVL='$tenvl',MaCT='$mact',MaNN='$mann',TrangThai='$tt' where MaVL='$mavl'
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>