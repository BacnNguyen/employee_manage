<!DOCTYPE html>
<html>
    <head>
        <style>
        table{
        font-size: 15px;
        width: 100%;
        border-collapse: collapse;
        }
        table ,td,th{
        border:3px solid black;
        padding: 5px;
        }
        th{
        text-align: left;
        }
        </style>
    </head>
    <body>
        <?php
        include 'connection.php';
        include 'controller.php';
        $q = $_GET['q'];
        $sort_val = $_GET['sortval'];
        $asc_desc = $_GET['value'];

        $sql = "select * from nhanvien where name like '%$q%' order by $sort_val $asc_desc";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();
        if($row){
            echo '
        <table class="table table-bordered bg-light">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style="width:180px">Họ tên</th>
                    <th style="width:90px">Giới tính</th>
                    <th style="width:120px">Năm sinh</th>
                    <th>SDT</th>
                    <th>Địa chỉ</th>
                    <th>Lương</th>
                    <th>Bằng cấp</th>
                    <th>Phòng ban</th>
                    <th>Chức vụ</th>
                    <th style="width:120px">Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody>';
        
                while ($row) {
                # code...
                    $d = strtotime($row['dateofbirth']);
                    if(date("m/d",$d)==date("m/d")) {
                        echo '<tr class="bg-warning">';
                    }
                    else echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    if($row['gender']==0)  echo "<td>"."Nam"."</td>";
                    else echo "<td>"."Nữ"."</td>";

                    
                    echo "<td>".$row['dateofbirth']."</td>";
                    
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['salary']."</td>";
                    echo "<td>".$row['degree']."</td>";
                    echo "<td>".getPBbyID($row['idPB'],$conn)."</td>";
                    echo "<td>".getCVbyID($row['idCV'],$conn)."</td>";
                    echo '<td> <a class="btn btn-primary m-1 p-1" href="GDsuanhanvien.php?id='.$row['id'].'">Sửa</a> <a class="btn btn-danger m-1 p-1" href="confirm.php?id='.$row['id'].'">Xóa</a></td>';
                    echo "</tr>";
                    $row = $query->fetch_assoc();
                    }
                echo "</tbody>
                </table>";
                echo '<a class="btn btn-primary m-1 p-1 pl-3 pr-3" href="xuatfile.php?q='.$q.'&sortval='.$sort_val.'&asc_desc='.$asc_desc.'">Xuất ra file</a>';
            } 
            else {
                echo "Không có kết quả tìm kiếm.";
            }
            ?>
        </body>
    </html>