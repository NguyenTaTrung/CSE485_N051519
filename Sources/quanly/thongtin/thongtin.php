<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $logo = $_POST["logo"];
        $slt = $_POST["slt"]; 
        $l = $_POST["l"];
        $ngaydang = $_POST["ngaydang"];
        $mavl = $_POST["mavl"]; 
        $query = "
        INSERT INTO thongtin (Logo,SoLuongTuyen,Luong,NgayDang,MaVL)  
         VALUES('$logo','$slt','$l','$ngaydang','$mavl')
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>