  -- phpMyAdmin SQL Dump
  -- version 3.4.9
  -- http://www.phpmyadmin.net
  --
  -- Host: localhost
  -- Generation Time: Nov 02, 2023 at 02:10 AM
  -- Server version: 5.5.20
  -- PHP Version: 5.3.10

  SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8 */;

  --
  -- Database: `qlcoffee`
  --
  CREATE DATABASE `qlcoffee` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
  USE `qlcoffee`;

  -- --------------------------------------------------------

  --
  -- Table structure for table `mon`
  --

  DROP TABLE IF EXISTS `mon`;
  CREATE TABLE IF NOT EXISTS `mon` (
    `MaMon` int(10) NOT NULL AUTO_INCREMENT,
    `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `PhanLoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
    `DonGia` int(10) NOT NULL,
    `HinhAnh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`MaMon`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11;

  --
  -- Dumping data for table `Mon`
  --

  INSERT INTO `mon` (`MaMon`, `Ten`, `PhanLoai`, `DonGia`, `HinhAnh`) VALUES
  (1, 'Trà dâu', 'đồ uống', 25000, 'images/tradau.jpg'),
  (2, 'Sinh tố bơ', 'đồ uống', 30000, 'images/sinhtobo.png'),
  (3, 'Bánh flan', 'món ăn', 20000, 'images/h1_banhflan.jpg'),
  (4, 'Tiramisu', 'món ăn', 45000, 'images/tiramisu.jpeg'),
  (5, 'Muffin', 'món ăn', 30000, 'images/h3_Muffin.jpg'),
  (6, 'Mousse cake', 'món ăn', 35000, 'images/h4_Moussecake.jpg'),
  (7, 'Cupcake', 'món ăn', 25000, 'images/h5_Cupcake.jpg'),
  (8, 'Mocha', 'cà phê', 30000, 'images/mocha.png'),
  (9, 'Latte', 'cà phê', 25000, 'images/latte.jpg'),
  (10, 'Americano', 'cà phê',20000, 'images/americano.jpg'),
  (11, 'Espresso', 'cà phê',30000, 'images/espresso1.jpg'),
  (12, 'Cappuccino', 'cà phê',40000, 'images/cappuccino.jpg'),
  (13, 'Macchiato', 'cà phê',40000, 'images/macchiato.jpg'),
  (14, 'Chocolate đá xây', 'đồ uống',35000, 'images/socoladaxay.jpg'),
  (15, 'Matcha đá xây', 'đồ uống',35000, 'images/matchadaxay.jpg'),
  (16, 'Sữa chua việt quất', 'đồ uống',35000, 'images/suachuadaxayvietquat.jpg'),
  (17, 'Trà vải', 'đồ uống',25000, 'images/travai.jpg'),
  (18, 'Croissant', 'món ăn',25000, 'images/croissant.jpg'),
  (19, 'Pancake', 'món ăn',35000, 'images/pancakes.jpg'),
  (20, 'Macaron', 'món ăn',20000, 'images/macaron.jpg'),
  (21, 'Bạc xỉu', 'cà phê',25000, 'images/bacxiu.jpg'),
  (22, 'Cà phê sữa', 'cà phê',25000, 'images/caphesua.jpg'),
  (23, 'Donut', 'món ăn',30000, 'images/donut.jpg'),
  (24, 'Matcha latte', 'đồ uống',30000, 'images/matchalatte.jpg'),
  (25, 'Cacao đá', 'đồ uống',25000, 'images/cacaoda.jpg'),
  (26, 'Trà sữa kem trứng', 'đồ uống',35000, 'images/trasuakemtrung.png'),
  (27, 'Bánh táo', 'món ăn',30000, 'images/applepie.jpg'),
  (28, 'Combo nước chanh', 'đồ uống',85000, 'images/chill.jpg'),
  (29, 'Cà phê sữa yến mạch', 'cà phê',30000, 'images/Espresso.jpg'),
  (30, 'Ooh la lavender', 'đồ uống',30000, 'images/oohlavender.jpg'),
  (31, 'Sandwich thịt', 'món ăn',30000, 'images/Bacon.jpg');


  -- --------------------------------------------------------

  --
  -- Table structure for table `nguoidung`
  --

  DROP TABLE IF EXISTS `nguoidung`;
  CREATE TABLE IF NOT EXISTS `nguoidung` (
    `MaNguoiDung` int(10) NOT NULL AUTO_INCREMENT,
    `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
    `QuyenHan` tinyint(1) NOT NULL,
    `Khoa` tinyint(1) NOT NULL,
    PRIMARY KEY (`MaNguoiDung`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

  --
  -- Dumping data for table `nguoidung`
  --

  INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
  (1, 'Trần Văn Sĩ', 'tvs', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
  (2, 'Nguyễn Tấn Tài', 'ntt', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
  (3, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 2, 0),
  (4, 'Trần Văn B', 'tvb', 'e10adc3949ba59abbe56e057f20f883e', 3, 0);

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

  -- --------------------------------------------------------

  --
  -- Table structure for table `giohang`
  --

  DROP TABLE IF EXISTS `giohang`;
  CREATE TABLE IF NOT EXISTS `giohang` (
    `MaGH` int(10) NOT NULL AUTO_INCREMENT,
    `MaNguoiDung` int(10) NOT NULL,
    `MaMon` int(10) NOT NULL,
    `SoLuong` int(10) NOT NULL,
    PRIMARY KEY (`MaGH`),
    FOREIGN KEY(`MaNguoiDung`) REFERENCES nguoidung(`MaNguoiDung`) ON DELETE CASCADE,
    FOREIGN KEY(`MaMon`) REFERENCES mon(`MaMon`) ON DELETE CASCADE
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

  --
  -- Dumping data for table `giohang`
  --

  INSERT INTO `giohang` (`MaGH`, `MaNguoiDung`, `MaMon`, `SoLuong`) VALUES
  (1, 4, 1,1),
  (2, 4, 10,1),
  (3, 4, 8,1);