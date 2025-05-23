<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "cauhinh.php";
include_once "thuvien.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kohi Coffee</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css\style.css" />
    <script type="text/javascript" src="js\script.js"></script>
</head>

<body>
    <!--Header-->
    <header>
        <div id="banner"></div>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-dark sticky-top">
        <div class="container justify-content-start">
            <a class="navbar-brand ms-2" href="">
                <img src="images/Logo.png" width="50px">
            </a>
            <div class="navbar">
                <ul class="nav nav-underline">
                    <li class="nav-item ms-3">
                        <a class="nav-link text-light" aria-current="page" href="index.php?do=home">Trang chủ</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-light" href="index.php?do=ca_phe">Cà phê</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-light" href="index.php?do=thuc_uong">Đồ uống</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-light" href="index.php?do=mon_an">Món ăn</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container justify-content-end">
            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if (!isset($_SESSION['MaND'])) {
                        echo '<li class="nav-item ms-3">';
                        echo '<a class="btn btn-outline-light rounded-pill" href="index.php?do=register">Đăng ký</a>';
                        echo '</li>';
                        echo '<li class="nav-item ms-3 me-3">';
                        echo '<a class="btn btn-light rounded-pill" href="index.php?do=login">Đăng nhập</a>';
                        echo '</li>';
                    } else {
                        echo '<li class="nav-item">';
                        echo '<a class="btn btn-outline-light rounded-pill position-relative" href="index.php?do=giohang&id=' . $_SESSION['MaND'] . '">';
                        $sql = "select count(SoLuong) as 'count' from giohang where MaNguoiDung=" . $_SESSION['MaND'];
                        $list = $connect->query($sql);
                        //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
                        if (!$list) {
                            die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
                            exit();
                        }
                        $row = $list->fetch_array(MYSQLI_ASSOC);
                        if ($row['count'] > 0) {
                            echo '<span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-pill bg-danger">
                                '.$row['count'].'
                            </span>';
                        }
                        echo '<i class="bi bi-cart"></i> Giỏ hàng';
                        echo '</a>';
                        echo '</li>';
                        echo 
                        '<button class="btn btn-outline-light rounded-pill dropdown-toggle ms-3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill-gear"></i> ' . $_SESSION['HoTen'] . '
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?do=hosocanhan">Hồ sơ</a></li>
                            <li><a class="dropdown-item" href="index.php?do=thaydoimk">Đổi mật khẩu</a></li>';
                            if ($_SESSION['Quyen'] != 3) {
                                echo
                                '<li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../Admin/index.php?do=home">Trang quản lý</a></li>';
                            }
                        echo '</ul>';
                        echo '<li class="nav-item ms-3">';
                        echo '<a class="btn btn-outline-light rounded-pill" href="index.php?do=dangxuat_xuly">Đăng xuất</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--Content-->
    <div id="content">
        <?php

        $do = isset($_GET['do']) ? $_GET['do'] : "home";

        include $do . ".php";
        ?>
    </div>
    <!--Footer-->
    <div class="container bg-white">
        <footer class="py-4">
            <div class="row border-top py-4 my-4">
                <div class="col-5 col-md-3 mb-3">
                    <h5>Về chúng tôi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php?do=home" class="nav-link p-0 text-dark">Trang chủ</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Về chúng tôi</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Hệ thống cửa hàng</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Tuyển dụng</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-3 mb-3">
                    <h5>Liên hệ với chúng tôi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-dark">
                                <i class="bi bi-telephone"></i> : +84 123 4567 890
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-dark">
                                <i class="bi bi-envelope"></i> : kohicoffe@gmail.com
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-dark">
                                <i class="bi bi-facebook"></i> : fb.com/kohicoffee
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-dark">
                                <i class="bi bi-instagram"></i> : @kohicoffee_
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-dark">
                                <i class="bi bi-twitter-x"></i> : @_kohicoffee
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-dark">
                                <i class="bi bi-telegram"></i> : t.me/kohicoffee
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Nhiều hơn nữa</h5>
                        <p>Đăng ký để nhận được nhiều thông tin và chương trình khuyến mãi.</p>
                        <div class="d-flex flex-column flex-sm-row w-80 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Nhập địa chỉ email...">
                            <button class="btn btn-outline-dark text-nowrap" type="button">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-2 border-top text-dark">
                <p>© 2024 Bản quyền thuộc về Kohi Coffee.</p>
                <div>
                    <img src="images/logotbbct.png" width="100px">
                    <img src="images/logodmca.png" width="75px">
                </div>
            </div>
        </footer>
    </div>
</body>

</html>