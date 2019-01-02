<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 15%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 85%;
  border-left: none;
  height: auto;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.dropdown-container {
  display: none;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

.active {
  background-color: green;
  color: white;
}

/* Kiểu bổ sung cho nút hủy */
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #f44336;
}

.containerr {
padding: 16px;
}

span.psw {
float: right;
padding-top: 16px;
}

/* Phương thức (nền) */
.modall {
display: none; /* Ẩn theo mặc định */
position: fixed; /* Ở lại trang */
z-index: 1; /* Ở trên top */
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto; /* Kích hoạt cuộn nếu cần */
background-color: rgb(0,0,0);
background-color: rgba(0,0,0,0.4);
padding-top: 60px;
}

/* Phương thức Content/Box */
.modall-contentt {
background-color: #fefefe;
margin: 5% auto 15% auto; /* 5% từ trên xuống, 15% từ dưới lên và ở giữa */
border: 1px solid #888;
width: 80%; /* Có thể nhiều hơn hoặc ít hơn, tùy thuộc vào kích thước màn hình */
}

/* Nút Đóng (x) */
.close {
position: absolute;
right: 25px;
top: 0;
color: #000;
font-size: 35px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: red;
cursor: pointer;
}

/* Thêm hoạt hình thu phóng */
.animatee {
-webkit-animation: animatezoom 0.6s;
animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
from {-webkit-transform: scale(0)} 
to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
from {transform: scale(0)} 
to {transform: scale(1)}
}

/* Thay đổi kiểu cho nhịp và nút hủy trên màn hình nhỏ thêm */
@media screen and (max-width: 300px) {
span.psw {
   display: block;
   float: none;
}
}

/* Các trường đầu vào toàn chiều rộng */
input[type=text], input[type=password] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}

input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}

button {
background-color: #f44336;
color: black;
padding: 10px 8px;
border: none;
cursor: pointer;
font-size: 14px;
}

button:hover {
opacity: 1;
}
</style>
</head>
<body>
    <h1 style="text-align:center">Welcome, admin!!</h1>

<div class="tab">
  <button class="tablinks dropdown-btn" onclick="openCity(event, 'i')" id="defaultOpen">Quản Lý CSDL<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
  <button class="tablinks" onclick="openCity(event, 'users')">Bảng users</button>
  <button class="tablinks" onclick="openCity(event, 'kv')">Bảng khu vực</button>
  <button class="tablinks" onclick="openCity(event, 'nn')">Bảng ngành nghề</button>
  <button class="tablinks" onclick="openCity(event, 'ct')">Bảng công ty</button>
  <button class="tablinks" onclick="openCity(event, 'vl')">Bảng việc làm</button>
  <button class="tablinks" onclick="openCity(event, 'thongtin')">Bảng thông tin</button>
  </div>
  <button class="tablinks" onclick="openCity(event, 'qlvl')">Quản Lý Việc Làm</button>
</div>

<div id="i" class="tabcontent">

</div>
<?php
	// Kết nối database, lấy dữ liệu chung
    include('includes/general.php');

    $sql1 = "SELECT * FROM users";
    $sql2 = "SELECT * FROM khuvuc";
    $sql3 = "SELECT * FROM nganhnghe";
    $sql4 = "SELECT * FROM congty";
    $sql5 = "SELECT * FROM vieclam";
    $sql6 = "SELECT * FROM thongtin";
    $sql = "SELECT ct.TenCT,vl.TenVL,kv.TenKV,tt.Logo,tt.Luong,vl.TrangThai FROM khuvuc kv , congty ct, vieclam vl ,thongtin tt where tt.MaVL=vl.MaVL and vl.MaCT=ct.MaCT and ct.MaKV=kv.MaKV";
    
    $kq=mysqli_query($cn,$sql);
    $kq1=mysqli_query($cn,$sql1);
    $kq2=mysqli_query($cn,$sql2);
    $kq3=mysqli_query($cn,$sql3);
    $kq4=mysqli_query($cn,$sql4);
    $kq5=mysqli_query($cn,$sql5);
    $kq6=mysqli_query($cn,$sql6);
?>

<!----------------------------------------Bảng QLVL------------------------------------------>
<div id="qlvl" class="tabcontent"><br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>Logo</th>
    <th>Việc làm</th>
    <th>Công ty</th>
    <th>Lương</th>
    <th>Khu vực</th>
    <th>Trạng Thái</th>
    <th>Chức năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq)){ ?>
  <tr>
    <td><?php echo $row['Logo'] ?></td>
    <td><?php echo $row['TenVL'] ?></td>
    <td><?php echo $row['TenCT'] ?></td>
    <td><?php echo $row['Luong'] ?> Triệu</td>
    <td><?php echo $row['TenKV'] ?></td>
    <td><?php echo $row['TrangThai'] ?></td>
    <td>
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>

<!----------------------------------------Form Thêm QLVL------------------------------------------>
<div id="id01" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Logo</b></label>
                <input type="text" id="lolo">

                <label><b>Việc làm</b></label>
                <input type="text" id="tenvl">

                <label><b>Công ty</b></label>
                <input type="text" id="tenct">

                <label><b>Luong</b></label>
                <input type="text" id="luong">

                <label><b>Khu vực</b></label>
                <input type="text" id="tenkv">

                <label><b>Trạng thái</b></label>
                <input type="text" id="trangthai">

                <button type="button" class="btnthem">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>
<!----------------------------------------Form Sửa QLVL------------------------------------------>
    <div id="id02" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Logo</b></label>
                <input type="text" id="lolo">

                <label><b>Việc làm</b></label>
                <input type="text" id="tenvl">

                <label><b>Công ty</b></label>
                <input type="text" id="tenct">

                <label><b>Luong</b></label>
                <input type="text" id="luong">

                <label><b>Khu vực</b></label>
                <input type="text" id="tenkv">

                <label><b>Trạng thái</b></label>
                <input type="text" id="trangthai">

                <button type="button" class="btnsua">Sửa</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>






<!----------------------------------------Bảng user------------------------------------------>
<div id="users" class="tabcontent"><br>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>ID_user</th>
    <th>Tên</th>
    <th>Họ</th>
    <th>Tài Khoản</th>
    <th>Mật Khẩu</th>
    <th>Ngày Tạo</th>
    <th>Chức Năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq1)){ ?>
  <tr>
    <td><?php echo $row['id_user'] ?></td>
    <td><?php echo $row['firsName'] ?></td>
    <td><?php echo $row['lastName'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['date_created'] ?></td>
    <td>
    <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>
<!----------------------------------------Form thêm user------------------------------------------>
    <div id="id03" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>ID_user</b></label>
                <input type="text" id="id">

                <label><b>Tên</b></label>
                <input type="text" id="ten">

                <label><b>Họ</b></label>
                <input type="text" id="ho">

                <label><b>Tài khoản</b></label>
                <input type="text" id="tk">

                <label><b>Mật khẩu</b></label>
                <input type="text" id="mk">

                <label><b>Ngày tạo</b></label>
                <input type="text" id="date">

                <button type="button" class="btnthemuser">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>

<!----------------------------------------Form sửa user------------------------------------------>
<div id="id04" class="modall">
<form method="POST" id="formJoin" class="modall-contentt animatee">

    <div class="containerr">
        <label><b>ID_user</b></label>
        <input type="text" id="id">

        <label><b>Tên</b></label>
        <input type="text" id="ten">

        <label><b>Họ</b></label>
        <input type="text" id="ho">

        <label><b>Tài khoản</b></label>
        <input type="text" id="tk">

        <label><b>Mật khẩu</b></label>
        <input type="text" id="mk">

        <label><b>Ngày tạo</b></label>
        <input type="text" id="date">

        <button type="button" class="btnsuauser">Sửa</button>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Thoát</button>
    </div>
</form>
</div>






<!----------------------------------------Bảng Khu Vực------------------------------------------>
<div id="kv" class="tabcontent"><br>
<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>Mã khu vực</th>
    <th>Tên khu vực</th>
    <th>Chức Năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq2)){ ?>
  <tr>
    <td><?php echo $row['MaKV'] ?></td>
    <td><?php echo $row['TenKV'] ?></td>
    <td>
    <button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>
<!----------------------------------------Form thêm Khu Vực------------------------------------------>
    <div id="id05" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Mã KV</b></label>
                <input type="text" id="makv">

                <label><b>Tên KV</b></label>
                <input type="text" id="tenkv">

                <button type="button" class="btnthemkv">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>

<!----------------------------------------Form sửa Khu Vực------------------------------------------>
    <div id="id06" class="modall">

<form method="POST" id="formJoin" class="modall-contentt animatee">

    <div class="containerr">
            <label><b>Mã KV</b></label>
            <input type="text" id="makv">

            <label><b>Tên KV</b></label>
            <input type="text" id="tenkv">

        <button type="button" class="btnsuakv">Sửa</button>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Thoát</button>
    </div>
</form>
</div>





<!----------------------------------------Bảng Ngành Nghề------------------------------------------>
<div id="nn" class="tabcontent"><br>
<button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>Mã Ngành Nghề</th>
    <th>Tên Ngành Nghề</th>
    <th>Chức Năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq3)){ ?>
  <tr>
    <td><?php echo $row['MaNN'] ?></td>
    <td><?php echo $row['TenNN'] ?></td>
    <td>
    <button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>

<!----------------------------------------Form Thêm NN------------------------------------------>
<div id="id07" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Mã NN</b></label>
                <input type="text" id="mann">

                <label><b>Tên NN</b></label>
                <input type="text" id="tennn">

                <button type="button" class="btnthemnn">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id07').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>

<!----------------------------------------Form Sửa VL------------------------------------------>
    <div id="id08" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Mã NN</b></label>
                <input type="text" id="mann">

                <label><b>Tên NN</b></label>
                <input type="text" id="tennn">

                <button type="button" class="btnsuann">Sửa</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id08').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>





<!----------------------------------------Bảng Công Ty------------------------------------------>
<div id="ct" class="tabcontent"><br>
<button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>Mã Công Ty</th>
    <th>Tên Công Ty</th>
    <th>Mã Khu Vực</th>
    <th>Thông Tin</th>
    <th>Chức Năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq4)){ ?>
  <tr>
    <td><?php echo $row['MaCT'] ?></td>
    <td><?php echo $row['TenCT'] ?></td>
    <td><?php echo $row['MaKV'] ?></td>
    <td><?php echo $row['ThongTin'] ?></td>
    <td>
    <button onclick="document.getElementById('id10').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>
<!----------------------------------------Form thêm CT------------------------------------------>
    <div id="id09" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Mã CT</b></label>
                <input type="text" id="mact">

                <label><b>Tên CT</b></label>
                <input type="text" id="tenct">

                <label><b>Mã KV</b></label>
                <input type="text" id="makv">

                <label><b>Thông Tin</b></label>
                <input type="text" id="tt">

                <button type="button" class="btnthemct">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>

<!----------------------------------------Form sửa CT------------------------------------------>
<div id="id10" class="modall">
<form method="POST" id="formJoin" class="modall-contentt animatee">

    <div class="containerr">
            <label><b>Mã CT</b></label>
            <input type="text" id="mact">

            <label><b>Tên CT</b></label>
            <input type="text" id="tenct">

            <label><b>Mã KV</b></label>
            <input type="text" id="makv">

            <label><b>Thông Tin</b></label>
            <input type="text" id="tt">

        <button type="button" class="btnsuact">Sửa</button>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id10').style.display='none'" class="cancelbtn">Thoát</button>
    </div>
</form>
</div>






<!----------------------------------------Bảng Việc Làm------------------------------------------>
<div id="vl" class="tabcontent"><br>
<button onclick="document.getElementById('id11').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>Mã Việc Làm</th>
    <th>Tên Việc Làm</th>
    <th>Mã Công Ty</th>
    <th>Mã Ngành Nghề</th>
    <th>Trạng Thái</th>
    <th>Chức Năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq5)){ ?>
  <tr>
    <td><?php echo $row['MaVL'] ?></td>
    <td><?php echo $row['TenVL'] ?></td>
    <td><?php echo $row['MaCT'] ?></td>
    <td><?php echo $row['MaNN'] ?></td>
    <td><?php echo $row['TrangThai'] ?></td>
    <td>
    <button onclick="document.getElementById('id12').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>
<!----------------------------------------Form thêm VL------------------------------------------>
    <div id="id11" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Mã VL</b></label>
                <input type="text" id="mavl">

                <label><b>Tên VL</b></label>
                <input type="text" id="tenvl">

                <label><b>Mã CT</b></label>
                <input type="text" id="mact">

                <label><b>Mã NN</b></label>
                <input type="text" id="mann">

                <label><b>Trạng Thái</b></label>
                <input type="text" id="tt">

                <button type="button" class="btnthemvl">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>

<!----------------------------------------Form sửa VL------------------------------------------>
<div id="id12" class="modall">
<form method="POST" id="formJoin" class="modall-contentt animatee">

    <div class="containerr">
            <label><b>Mã VL</b></label>
            <input type="text" id="mavl">

            <label><b>Tên VL</b></label>
            <input type="text" id="tenvl">

            <label><b>Mã CT</b></label>
            <input type="text" id="mact">

            <label><b>Mã NN</b></label>
            <input type="text" id="mann">

            <label><b>Trạng Thái</b></label>
            <input type="text" id="tt">

        <button type="button" class="btnsuavl">Sửa</button>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id12').style.display='none'" class="cancelbtn">Thoát</button>
    </div>
</form>
</div>






<!----------------------------------------Bảng Thông Tin------------------------------------------>
<div id="thongtin" class="tabcontent"><br>
<button onclick="document.getElementById('id13').style.display='block'" style="width:auto;">Thêm</button><br><br>
  <table>
  <tr>
    <th>Mã Thông Tin</th>
    <th>Logo</th>
    <th>Số Lượng Tuyển</th>
    <th>Lương</th>
    <th>Ngày Đăng</th>
    <th>Mã Việc Làm</th>
    <th>Chức Năng</th>
  </tr>
  <?php while($row=mysqli_fetch_array($kq6)){ ?>
  <tr>
    <td><?php echo $row['MaTT'] ?></td>
    <td><?php echo $row['Logo'] ?></td>
    <td><?php echo $row['SoLuongTuyen'] ?></td>
    <td><?php echo $row['Luong'] ?></td>
    <td><?php echo $row['NgayDang'] ?></td>
    <td><?php echo $row['MaVL'] ?></td>
    <td>
    <button onclick="document.getElementById('id14').style.display='block'" style="width:auto;">Sửa</button>
    <button type="button" value="Xóa">Xóa</button>
    </td>
  </tr>
  <?php
    }
    ?>
</table> 
</div>
<!----------------------------------------Form thêm TT------------------------------------------>
    <div id="id13" class="modall">

        <form method="POST" id="formJoin" class="modall-contentt animatee">

            <div class="containerr">
                <label><b>Mã TT</b></label>
                <input type="text" id="matt">

                <label><b>Logo</b></label>
                <input type="text" id="logo">

                <label><b>Số Lượng Tuyển</b></label>
                <input type="text" id="slt">

                <label><b>Lương</b></label>
                <input type="text" id="l">

                <label><b>Ngày Đăng </b></label>
                <input type="text" id="ngaydang">

                <label><b>Mã VL</b></label>
                <input type="text" id="mavl">

                <button type="button" class="btnthemtt">Thêm</button>
            </div>

            <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id13').style.display='none'" class="cancelbtn">Thoát</button>
            </div>
        </form>
    </div>

<!----------------------------------------Form sửa TT------------------------------------------>
<div id="id14" class="modall">
<form method="POST" id="formJoin" class="modall-contentt animatee">

    <div class="containerr">
            <label><b>Mã TT</b></label>
            <input type="text" id="matt">

            <label><b>Logo</b></label>
            <input type="text" id="logo">

            <label><b>Số Lượng Tuyển</b></label>
            <input type="text" id="slt">

            <label><b>Lương</b></label>
            <input type="text" id="l">

            <label><b>Ngày Đăng </b></label>
            <input type="text" id="ngaydang">

            <label><b>Mã VL</b></label>
            <input type="text" id="mavl">

        <button type="button" class="btnsuatt">Sửa</button>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id14').style.display='none'" class="cancelbtn">Thoát</button>
    </div>
</form>
</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

</script>


    <script>
        // Get the modal
        var modal = document.getElementById('id01','id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>

</body>
</html>