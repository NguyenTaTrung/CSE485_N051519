<?php
include('includes/general.php');
if(isset($_POST)){
$ng=$_POST['nganh'];
$dd=$_POST['diadiem'];
$sql="SELECT TenCT,TenVL,TenKV,TenNN FROM khuvuc kv , congty ct,vieclam vl ,nganhnghe nn where nn.MaNN=vl.MaNN and vl.MaCT=ct.MaCT AND ct.MaKV=kv.MaKV and TenKV='$dd' and TenNN='$ng'";

$kq=mysqli_query($cn,$sql);
$sl=mysqli_num_rows($kq);
if($sl==0){
    echo "KHÔNG CÓ KẾT QUẢ TÌM KIẾM!";
}
else{
while($row=mysqli_fetch_array($kq)){
?>

<H2> <a href="job.php?loc=<?php echo $row['TenVL'] ?>" ><?php echo $row['TenVL'] ?></a></H2>
<p><?php echo $row['TenNN'] ?> - <?php echo $row['TenCT']?> - <?php echo $row['TenKV']?></p>

<?php
}
}
}

?>