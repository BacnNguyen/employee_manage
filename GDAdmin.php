<?php
session_start();
if(!isset($_SESSION['username'])){
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'GDdangnhap.php'. '">';
}
else if(!isset($_COOKIE['username'])){
setcookie("username",$_SESSION['username'],time()+3600);
}else{
$cookie = $_COOKIE['username'];
$ss = $_SESSION['username'];
if($ss != $cookie){
setcookie('username',$cookie,time()-3600);
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'GDdangnhap.php'. '">';
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <style>
        label{
        color:black;
        font-weight: bold;
        font-size: 20px;
        }
        </style>


        <script>
            $(document).ready(function() {
                showHint(" ","id","asc");
            });
            function showHint(str,sortval,value){
                if(str.length == -1){
                    document.getElementById("result").innerHTML = "Gõ 'dấu cách' vào ô tìm kiếm để hiển thị tất cả nhân viên.";
                    return;
                }
                else {
                    var  xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(this.readyState ==4 && this.status == 200){
                            document.getElementById("result").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","ajax_database.php?q="+str+"&sortval="+sortval+"&value="+value,true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
        <div class="bg-dark container-fluid p-3">
            <div class="bg-secondary p-3" style="position: relative;">
                <h1 class="mx-auto bg-secondary" style="width: 200px;font-weight: bold;display: flex; justify-content: center;">ADMIN</h1>
                <a href="logout.php" style="color: white; width: 100px;height: 100%; position: absolute;right: 0;bottom: 0;display: flex;align-items: center;margin-right: 10px"><h5>Đăng xuất</h5></a>
            </div>
            <div class="mt-4 bg-light p-4">

                <h1 class="mx-auto p-2" style="width: 430px;">QUẢN LÝ NHÂN VIÊN</h1>
                <a href="themnhanvien.php" class="btn btn-primary p-1 m-3">Thêm nhân viên</a>
                <br>
                <label><strong>Tìm kiếm  :</strong></label>
                <input type="text" style="width: 400px;margin-left: 50px;margin-bottom: 20px;" name="fname" id="fname" placeholder="Tên nhân viên..." onkeyup="showHint(getElementById('fname').value,getElementById('sort_type').value,getElementById('asc_desc').value)">
                <br>
                <label><strong>Sắp xếp theo  :</strong></label>
                <select id="sort_type" onchange="showHint(getElementById('fname').value,getElementById('sort_type').value,getElementById('asc_desc').value)" style="width: 150px;margin-left: 15px">
                    <option value="name" selected>Họ tên</option>
                    <option value="dateofbirth">Năm sinh</option>
                    <option value="salary">Lương</option>
                </select>

                <select style="width: 100px" id="asc_desc" onchange="showHint(getElementById('fname').value,getElementById('sort_type').value,getElementById('asc_desc').value)">
                    <option value="asc" selected>Tăng dần</option>
                    <option value="desc" selected>Giảm dần</option>
                </select>
                <div style="height: 1000px">
                    <span id="result">Gõ 'dấu cách' vào ô tìm kiếm để hiển thị tất cả nhân viên.</span>
                </div>
                
            </div>
        </div>
        
    </body>
</html>