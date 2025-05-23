<?php
//session_set_cookie_params(30); // 1800 giây = 30 phút
session_start();


include_once "cauhinh.php";

include_once "thuvien.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trang quản lý</title>
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
    <nav class="navbar navbar-expand bg-dark  sticky-top">
        <div class="container justify-content-start">
            <a class="navbar-brand ms-2" href="index.php?do=home">
                <img src="images/Logo.png" width="50px">
            </a>
            <p class="text-light ms-3" style="font-size: 20pt;">Trang quản lý</p>
        </div>
        <div class="container justify-content-end">
            <div class="navbar">
                <ul class="navbar-nav">
                    <?php
                    if (!isset($_SESSION['MaND'])) {
                        echo
                        '<li class="nav-item ms-3 me-3">
                            <a class="btn btn-light rounded-pill" href="index.php?do=dangnhap">Đăng nhập</a>
                        </li>';
                    } else if (isset($_SESSION['MaND'])) {
                        echo '<li class="nav-item ms-3">
                        <button class="btn btn-outline-light rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill-gear"></i>
                                ' . $_SESSION['HoTen'] . '
                            </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?do=hosocanhan">Hồ sơ</a></li>
                            <li><a class="dropdown-item" href="index.php?do=thaydoimk">Đổi mật khẩu</a></li>
                        </ul>
                        </li>
                        <li class="nav-item ms-3 me-3">
                            <a class="btn btn-outline-light rounded-pill" href="index.php?do=dangxuat">Đăng xuất</a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--Content-->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <nav class="navbar mt-3">
                        <div class="container justify-content-start">
                            <div class="navbar border-end">
                                <ul class="navbar-nav me-5">
                                    <h3>Quản lý</h3>
                                    <?php
                                    if (!isset($_SESSION['MaND'])) {
                                        echo '<li class="nav-item ms-3">Đăng nhập để sử dụng các chức năng</li>';
                                    } else {
                                        if ($_SESSION['Quyen'] == 2) {
                                            echo
                                            '<li class="nav-item ms-3">
                                                <a class="nav-link" href="index.php?do=themmon">Thêm món</a>
                                            </li>';
                                        } else if ($_SESSION['Quyen'] == 1) {
                                            echo
                                            '<li class="nav-item ms-3">
                                                <a class="nav-link" href="index.php?do=themmon">Thêm món</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="index.php?do=qldanhsach">Quản lý món</a>
                                            </li>
                                            <li class="nav-item ms-3">
                                                <a class="nav-link" href="index.php?do=qlnguoidung">Quản lý người dùng</a>
                                            </li>';
                                        }
                                    }
                                    ?>
                                    <h3>Hồ sơ cá nhân</h3>
                                    <?php
                                    if (!isset($_SESSION['MaND'])) {
                                        echo '<li class="nav-item ms-3">Đăng nhập để sử dụng các chức năng</li>';
                                    } else {
                                        echo
                                        '<li class="nav-item ms-3">
                                            <a class="nav-link" href="index.php?do=hosocanhan">Thông tin tài khoản</a>
                                        </li>
                                        <li class="nav-item ms-3">
                                            <a class="nav-link" href="index.php?do=thaydoimk">Đổi mật khẩu</a>
                                        </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-8 mt-4">
                    <?php
                    $do = isset($_GET['do']) ? $_GET['do'] : "home";
                    include $do . ".php";
                    ?>
                </div>
            </div>
            <!--Footer-->
            <div class="container bg-white">
                <footer class="py-4">
                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-2 border-top text-dark">
                        <a class="nav-link" href="../TrangChu/index.php?do=home"><i class="bi bi-chevron-left"></i>Quay về trang mua sắm</a>
                        <p>© 2024 Bản quyền thuộc về Kohi Coffee.</p>
                        <div>
                            <img src="images/logotbbct.png" width="100px">
                            <img src="images/logodmca.png" width="75px">
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>