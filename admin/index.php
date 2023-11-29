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
        case "suaimg":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $qlimg = load_image($_GET['id']);
            }
            $listimg = loadall_image();
            include "sanpham/updateimg.php";
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
        case "updateimg":
            if (isset($_POST['suaanh']) && ($_POST['suaanh'])) {
                $id = $_POST['id'];
                $image1 = $_FILES['image1']['name'];
                $image2 = $_FILES['image2']['name'];
                $target_dir = "../upload/";
                $target_file1 = $target_dir . basename($_FILES['image1']['name']);
                $target_file2 = $target_dir . basename($_FILES['image2']['name']);
                if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1)) {
                } else {
                    echo "Sorry, there was an error uploading your file1.";
                }
                if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2)) {
                } else {
                    echo "Sorry, there was an error uploading your file2.";
                }
                update_image($image1, $image2, $id);
            }
            $listimage = loadall_image();
            $listsp = loadall_sanpham();
            include "sanpham/listimg.php";
            break;

        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $name = $_POST['name'];
                $masp = $_POST['masp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($name, $masp, $price, $img, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case "addimage":
            if (isset($_POST['addanh']) && ($_POST['addanh'])) {
                $idpro = $_POST['idpro'];
                $image1 = $_FILES['img1']['name'];
                $image2 = $_FILES['img2']['name'];
                $target_dir = "../upload/";
                $target_file1 = $target_dir . basename($_FILES['img1']['name']);
                $target_file2 = $target_dir . basename($_FILES['img2']['name']);
                if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1)) {
                } else {
                    echo "Sorry, there was an error uploading your file1.";
                }
                if (move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2)) {
                } else {
                    echo "Sorry, there was an error uploading your file2.";
                }
                insert_image($image1, $image2, $idpro);
                $thongbao = "Thêm thành công";
            }

            $listsp = loadall_sanpham();
            include "sanpham/addimage.php";
            break;
        case "listimg":
            $listimage = loadall_image();
            include "sanpham/listimg.php";
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
                $masp = $_POST['masp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                update_sanpham($id, $iddm, $name, $masp, $price, $mota, $img);
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
        case "addtk":
            // Kiểm tra xem nút submit đã được nhấn chưa
            if (isset($_POST['themmoitk']) && ($_POST['themmoitk'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];

                // Gọi hàm insert_taikhoan để thêm dữ liệu vào CSDL
                insert_taikhoan($user, $pass, $email, $address, $tel, $role);
                $thongbao = "Thêm thành công";
            }
            // Bao gồm file HTML hiển thị form
            include "taikhoan/add.php";
            break;
        case "suatk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
                extract($tk);
            }
            include "taikhoan/update.php";
            break;
        case "updatetk":
            if (isset($_POST['updatetk']) && ($_POST['updatetk'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                $thongbao = "Cập nhật thành công";
            }
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
       
        case "thongke":
            $listthongke = loadall_thongke_sanham_dm();
            include "thongke/list.php";
            break;
        case "bdososp":
           $bd= loadall_thongke_sanham_dm_gg();
            include "thongke/bdososp.php";
            break;
        case "exitadmin":
             header("location:../index.php");
            exit;
            
    }
} else {
    include "home.php";
}
