<?php 
	include 'connection.php';
	$q = $_GET['q'];
    $sort_val = $_GET['sortval'];
    $asc_desc = $_GET['asc_desc'];
    $sql = "select * from nhanvien where name like '%$q%' order by $sort_val $asc_desc";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    $outfile = fopen("output.data", "w") or die("Unable to open file");

    while($row){
    	$line = $row['id'].",".$row['name'].",";
    	if($row['gender']==0) $line.='Nam ,';
    	else $line.="Nu ,";
    	$line .= $row['dateofbirth']." , ".$row['address']." , ".$row['phone'].",";
    	$line .=$row['salary']." , ".$row['degree']."\n";
    	fwrite($outfile, $line);

    	$row = $query->fetch_assoc();
    }

    echo "<a href='output.data'>Xem file</a>";

 ?>