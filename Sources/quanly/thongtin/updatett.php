<?php
    include('../../includes/general.php');
    
    if(!empty($_POST))
    {
        $matt = $_POST['matt'];
        $logo = $_POST["logo"];
        $slt = $_POST["slt"];
        $l = $_POST["l"];
        $ngaydang = $_POST["ngaydang"];
        $mavl = $_POST["mavl"];
        $query = "
        UPDATE thongtin SET MaTT='$matt',Logo='$logo',SoLuongTuyen='$slt',Luong='$l',NgayDang='$ngaydang',MaVL='$mavl' where MaTT='$matt'
        ";
        $qr=mysqli_query($cn,$query);
        if(!$qr){
            echo('Loi');
        };
    }
?>