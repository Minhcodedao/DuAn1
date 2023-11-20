<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/taikhoan.php";
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // danh mục
        case "adddm":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                insert_danhmuc($name);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case "listdm":
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "xoadm":
            if ($_GET['id'] > 0) {
                $id = $_GET['id'];
                delete_danhmuc($id);
                $thongbao = "xóa thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "suadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                update_danhmuc($id, $name);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($name, $price, $img, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case "listsp":
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case "xoasp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_sanpham($id);
                $thongbao = "xóa thành công";
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case "suasp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                update_sanpham($id, $iddm, $name, $price, $mota, $img);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
            // binh luan

        case "dsbl":
            $listbl = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case "xoabl":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbl = loadall_binhluan("", 0);
            include "binhluan/list.php";
            break;

            // tài khoản
        case "dstk":
            $listtk = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case "xoatk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtk = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        

    }
} else {
    include "home.php";
}
