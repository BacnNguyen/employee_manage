 <?php
        session_start();
        if(!isset($_SESSION['username'])){
            setcookie('username',$_SESSION['username'],time()-3600);
             echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'GDdangnhap.php'. '">';  
             
        }
    ?> 
<!DOCTYPE html>
<html>

<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="style.css">

   

    
    <style>
        .thongbao {
            background-color: #f5ffd1;
            padding: 20px;
        }

        .dsnv {
            background-color: #fff;
        }

        .phong {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .carousel-control-next-icon {
            opacity: 0%;
        }

        .carousel-control-prev-icon {
            opacity: 0%;
        }
    </style>
</head>

<body>
    <div class="header text-light" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-dark p-4">
            <h1 class="navbar-brand" href="index.html">)BAC(</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="trangchu">Trang chủ</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href="luong">Lương thưởng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="phongban">Phòng ban</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link text-white" href="doimatkhau">Đổi mật khẩu</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link text-white" href="suathongtin.php">Sửa thông tin</a>
                    </li> -->
                </ul>
                <div style="margin-left: auto;margin-right: 10px;">
                    <span><a style="margin-left: auto;display: inline;color: #007bff"><?php echo ''.$_COOKIE['username']?></a></span>
                    <span><a href="logout.php" style="padding: 10px">Đăng xuất</a></span>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="true">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/active.jpg" alt="Los Angeles" width="100%" height="100%">
                    <div class="carousel-caption">
                        <h3>Năng động</h3>
                        <p>Chúng tôi năng động!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/creative.jpg" alt="Chicago" width="100%" height="100%">
                    <div class="carousel-caption">
                        <h3>Sáng tạo</h3>
                        <p>Chúng tôi sáng tạo!</p>
                    </div>
                </div>

                <div class="carousel-item active">
                    <img class="img-fluid" src="./images/united.jpg" alt="Chicago" width="100%" height="100%">
                    <div class="carousel-caption">
                        <h3>Đoàn kết</h3>
                        <p>Chúng tôi đoàn kết!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon"></span> -->
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <!-- <span class="carousel-control-next-icon"></span> -->
            </a>
        </div>
    </div>

    <div class="container dsnv">
        <h3 class="text-center bg-warning p-4 m-4">Danh sách nhân viên</h3>
        <!-- phong 1 -->
        <div class="bg-secondary text-center mb-5 mb-3">
            <h4 class="text-light phong">Phòng Marketing</h4>
            <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php 
                        include 'connection.php';
                        $sql = "select count(*) from nhanvien where idPB = 123 ";
                        $query = $conn->query($sql);
                        $row = $query->fetch_array()[0];
                        $row /=3;
                        echo ' <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>';
                        for ($i=1; $i <$row ; $i++) { 
                            # code...
                            echo '<li data-target="#myCarousel2" data-slide-to="'.$i.'"></li>';
                        }
                     ?>
                    <!-- <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" data-slide-to="2"></li> -->
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/20.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h5 class="card-title">Phan Trọng Vỹ </h5>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/21.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h5 class="card-title">Phạm Thị Lan</h5>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/22.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h5 class="card-title">Nguyễn Jenny </h5>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/23.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h5 class="card-title">Cao Thị Kim</h5>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/24.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h5 class="card-title">Nguyễn Lê Trần </h5>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/25.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h5 class="card-title">Nguyễn Dung </h5>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/26.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Abbey</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/27.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Abilene</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/28.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Anemone</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <?php 
                        include 'connection.php';
                        include 'controller.php';
                        $sql = "select * from nhanvien where idPB = 123 ";
                        $query = $conn->query($sql);
                        $row = $query->fetch_assoc();

                        echo '<div class="carousel-item active">';
                            echo '<div class="row mb-5" style="background-color:#5d5d5d ">';
                                echo '<div class="col-lg-12 mt-4">';
                                    echo '<div class="row">';
                                        for ($i=0; $i <3 ; $i++) { 
                                            # code...
                                            if(!isset($row)) break;
                                            echo '<div class="col-lg-4" style="position:relative">';
                                                echo '<div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">';
                                                    echo '<img src="'.$row['image_url'].'" class="card-img-top" alt="Card image" style="width: 200px;height: 200px;object-fit: cover;">';
                                                    echo '<div class="card-body ">';
                                                        echo '<h5 class="card-title">'.$row['name'].' </h5>';
                                                        echo '<p class="card-text">'.getCVbyID($row['idCV'],$conn)." ".getPBbyID($row['idPB'],$conn).'</p>';
                                                        echo '<a target="blank" class="btn btn-primary btn-detail" href="showinfo.php?id='.$row['id'].'">Xem chi tiết</a>';
                                                    echo '</div>';
                                                    $d = strtotime($row['dateofbirth']);
                                                    if(date("m/d",$d)==date("m/d")) {
                                                        echo '<div style="background-image:url(images/sinhnhat.gif);opacity:0.2;position:absolute;background-repeat:no-repeat;width: 200px;height: 200px;"></div>';
                                                    }
                                                echo '</div>';
                                            echo '</div>';
                                            $row = $query->fetch_assoc();
                                        }
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        while ($row) {
                            # code...
                            echo '<div class="carousel-item">';
                                echo '<div class="row mb-5" style="background-color:#5d5d5d ">';
                                    echo '<div class="col-lg-12 mt-4">';
                                        echo '<div class="row">';
                                            for ($i=0; $i <3 ; $i++) { 
                                                # code...
                                                if(!isset($row)) break;
                                                echo '<div class="col-lg-4">';
                                                    echo '<div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">';
                                                        echo '<img src="'.$row['image_url'].'" class="card-img-top" alt="Card image" style="width: 200px;height: 200px;object-fit: cover;">';
                                                        echo '<div class="card-body ">';
                                                            echo '<h5 class="card-title">'.$row['name'].' </h5>';
                                                            echo '<p class="card-text">'.getCVbyID($row['idCV'],$conn)." ".getPBbyID($row['idPB'],$conn).'</p>';
                                                            echo '<button class="btn btn-primary btn-detail" data-target="#mark" data-toggle="modal">Xem chi tiết</button>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';
                                                $row = $query->fetch_assoc();
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                     ?>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev " href="#myCarousel2" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel2" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>


        <!-- phong 2 -->
        <div class="bg-secondary text-center mb-5 mb-3">
            <h4 class="text-light phong">Phòng Kỹ thuật và Dịch vụ</h4>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p1.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Cleopatra</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p2.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Dana</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p3.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Fay</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p4.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Gemma</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p5.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Jasmine</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p6.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Laelia</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p7.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Margaret</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p8.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Milcah</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/p9.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Nevaeh</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <!-- phong 3 -->
        <div class="bg-secondary text-center mb-5 mb-3">
            <h4 class="text-light phong">Phòng Hành chính</h4>
            <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="false">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/29.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Olwen</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/30.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Phyllis</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/31.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Sophia</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/32.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Veronica</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/33.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Zoey</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/34.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Zulema</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5" style="background-color:#5d5d5d ">
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/35.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Thalassa</h4>
                                                <p class="card-text">Trưởng phòng Marketing</p>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#lena1">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4 mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/36.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Usha</h4>
                                                <p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
                                                <button class="btn btn-primary" data-target="#elisa"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-4  mx-auto" style="width: 200px;height: 382px;">
                                            <img src="images/manager2.jpg" class="card-img-top" alt="Card image"
                                                style="width: 200px;height: 200px;object-fit: cover;">
                                            <div class="card-body ">
                                                <h4 class="card-title">Xenia</h4>
                                                <p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
                                                <button class="btn btn-primary btn-detail" data-target="#mark"
                                                    data-toggle="modal">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel1" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel1" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="footer container-fluid bg-white">
        <div class="row" style="padding: 20px; margin-top: 10px;background-color:#e0e0e0">
            <div class="col-sm-3 ">
                <h5>Liên hệ:</h5>
                <div>
                    <img src="images/facebook.svg" style="width: 19px;height: 19px;">
                    <a href="http://freewebsitetemplates.com/go/facebook/" id="fb">Facebook</a>
                </div>

                <div>
                    <img src="images/twitter.svg" style="width: 19px;height: 19px;">
                    <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">Twitter</a>
                </div>
                <div>
                    <img src="images/google-plus.svg" style="width: 19px;height: 19px;">
                    <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">Google+</a>
                </div>
            </div>
            <div class="col-sm-5">
                <h5>Địa chỉ:</h5>
                <div>
                    <p><a href="#">30 Trần Phú, P. Mộ Lao, Hà Đông, Hà Nội</a></p>
                    <p><a href="#">141 Chiến Thắng, Tân Triều, Thanh Trì, Hà Nội</a></p>
                    <p><a href="#">2 Trần Phú, P. Mộ Lao, Hà Đông, Hà Nội</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <h5>Bản đồ:</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14901.21012366381!2d105.7805630048828!3d20.980506711116618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIGLGsHUgY2jDrW5oIHZp4buFbiB0aMO0bmcgUHRpdA!5e0!3m2!1svi!2s!4v1602773848151!5m2!1svi!2s"
                    width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>

    <!-- lena modal -->
    <div id="lena1" class="modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header">
                    <h3>Phan Trọng Vỹ</h3>
                </div>
                <!-- modal body -->
                <div class="modal-body">
                    <strong>
                        <ul>
                            <li>Chức vụ : Trưởng phòng Marketing</li>
                            <li>Tuổi : 25</li>
                            <li>Năm kinh nghiệm : 5 năm</li>
                            <li>Bằng cấp: Thạc sĩ kinh tế</li>
                        </ul>
                    </strong>
                </div>
                <!-- modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn-btn-secondary" data-dismiss="modal"> Đóng</button>
                </div>
            </div>
        </div>
    </div>


    <!-- elisa modal -->
    <div id="elisa" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <h4>Phạm Thị Lan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- modal body -->
                <div class="modal-body">
                    <strong>
                        <ul>
                            <li>Trưởng Phòng Tổ chức-Hành chính</li>
                            <li>Tuổi : 27</li>
                            <li>Năm kinh nghiệm : 4 năm</li>
                            <li>Bằng cấp: Tiến sĩ quản lý nhân lực</li>
                        </ul>
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- mark modal -->
    <div id="mark" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <h4>Nguyễn Jenny</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- modal body -->
                <div class="modal-body">
                    <strong>
                        <ul>
                            <li>Trưởng Phòng Kỹ thuật và Dịch vụ</li>
                            <li>Tuổi : 31</li>
                            <li>Năm kinh nghiệm : 6 năm</li>
                            <li>Bằng cấp: Thạc sỹ kinh tế</li>
                        </ul>
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- benina modal -->
    <div id="benina" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <h4>Phan Trọng Vỹ</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- modal body -->
                <div class="modal-body">
                    <strong>
                        <ul>
                            <li>Phòng Phát triển dự án</li>
                            <li>Tuổi : 24</li>
                            <li>Năm kinh nghiệm : 2 năm</li>
                            <li>Bằng cấp: Cử nhân Kinh tế</li>
                        </ul>
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- mark modal -->
    <div id="fona" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <h4>Phạm Thị Lan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- modal body -->
                <div class="modal-body">
                    <strong>
                        <ul>
                            <li>Chuyên viên hệ thống công nghệ thông tin</li>
                            <li>Tuổi : 25</li>
                            <li>Năm kinh nghiệm : 2 năm</li>
                            <li>Bằng cấp: Thạc sỹ CNTT</li>
                        </ul>
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- mark modal -->
    <div id="toseli" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <h4>Nguyễn Jenny</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- modal body -->
                <div class="modal-body">
                    <strong>
                        <ul>
                            <li>Phòng Dịch vụ và giải pháp</li>
                            <li>Tuổi : 22</li>
                            <li>Năm kinh nghiệm : 1 năm</li>
                            <li>Bằng cấp: Kỹ sư CNTT</li>
                        </ul>
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <script>
       
        $(document).ready(function () {
             
            // Activate Carousel with a specified interval
            $("#demo").carousel({ interval: 4000, pause: "hover" });
            window.onscroll = function () { scrollFunction() };
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    var x = document.getElementsByClassName("navbar");
                    x[0].style.background = "rgba(52,58,64,1)";
                }
                else {
                    var x = document.getElementsByClassName("navbar");
                    x[0].style.background = "rgba(52,58,64,0)";
                }
            }
        });
    </script>
    </script>
</body>

</html>