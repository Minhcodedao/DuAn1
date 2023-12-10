<?php
ob_start();
session_start();
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./model/taikhoan.php";
include "./model/cart.php";
include "./view/header.php";
include "./global.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spkc = loadsp_kc();
$listma = listma();
$dsdm = loadall_danhmuc();
$dstop10 =loadall_sanpham_top10();
$dstop5 =loadall_sanpham_top5();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'taikhoan':
            include "view/taikhoan/dkydn.php";
            break;
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $spcl=load_sanpham_cungloai($id,$iddm);
                include "view/chitiet.php";
            }else{
                include "./view/home.php";
            }
            break;
        case 'sanpham':
            if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw ="";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];
            }else{
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "./view/sanpham.php";
            
            break;
      
        case 'contact':
            include "view/contact.php";
            break; 
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    insert_taikhoan($user, $pass, $email, $address, $tel);
            
                    // Lưu thông báo vào session
                    session_start();
                    $_SESSION['thongbao_dangky'] = "Đã đăng ký thành công! Vui lòng đăng nhập để thực hiện các chức năng khác!";
            
                    // Chuyển hướng đến trang đăng nhập
                    header('Location: ./index.php?act=dangnhap');
                    exit;
                }
            
                include "./view/taikhoan/dangky.php";
                break;
             
        case 'quenmk':
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if(is_array($checkemail)){
                    $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                }else{
                    $thongbao = "Email này không tồn tại!";
                }
    
            }
            include "./view/taikhoan/quenmk.php";
            break; 
            case 'dangnhap':
                if (isset($_SESSION['thongbao_dangky'])) {
                    echo $_SESSION['thongbao_dangky'];
                    // Xóa thông báo sau khi hiển thị
                    unset($_SESSION['thongbao_dangky']);
                }
            
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
            
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        header('Location: index.php');
                        exit;
                    } else {
                        $thongbao2 = "Tài khoản không tồn tại! Vui lòng kiểm tra hoặc đăng ký!";
                    }
                }
            
                include "./view/taikhoan/dangnhap.php";
                break;
            
        case "thanhtoan":
            include "./view/cart/thanhtoan.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break; 
        case "giohang":
            include "./view/cart/viewcart.php";
            break;


        // CART
        case 'addtocart':
            if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                $id= $_POST['id'];
                $name= $_POST['name'];
                $masp= $_POST['masp'];
                $image= $_POST['image'];
                $price= $_POST['price'];
                $soluong = $_POST['soluong'];
                $ttien = $soluong * $price;
                $spadd = [$id,$name,$masp,$image,$price,$soluong,$ttien];
                array_push($_SESSION['mycart'],$spadd);
            }
            include "./view/cart/viewcart.php";
            break;
        case 'delcart':
            if(isset($_GET['idcart'])&&($_GET['idcart']>=0)){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            header('location: index.php?act=viewcart'); 
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            // nếu k đăng nhập k co mua và hiện ra thông báo
            if(!isset($_SESSION['user'])){
                $thongbaomh = "Bạn chưa đăng nhập! Vui lòng đăng nhập để mua hàng!";
                include "view/taikhoan/dangnhap.php";
            }
            else{
                if(isset($_POST['magg'])&&($_POST['magg']>0)){
                    $sale = $_POST['magg'];
                }
                else{
                    $sale = 0;
                }
                include "view/cart/thanhtoan.php";
            }
            break;
        case 'billct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id = $_GET['id'];
                $bill = select_cart($id);//
            }
            include "view/cart/billct.php";
            break;
        case "xoabill":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id = $_GET['id'];
                xoabill($id);
                header('location: index.php?act=mybill');
            }
            break;
        case 'mybill':
            if(isset($_SESSION['user'])){
                $iduser = $_SESSION['user']['id'];
            }
            else{
                $iduser = 0;
            }
            $listbill = loadall_bill("",$iduser);
            include "view/cart/mybill.php";
            break;
        case 'billconfirm':
            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $iduser = 0;
                $name= $_POST['name'];
                $email= $_POST['email'];
                $address= $_POST['address'];
                $tel= $_POST['tel'];
                $pttt= $_POST['pttt'];
                $ngaydathang= date('h:i:sa d/m/Y');
                $tongdonhang=$_POST['tongdonhang'];
                $idbill = insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
                // insert into cart : $session['mycart'] & idbill
                foreach($_SESSION['mycart'] as $cart){
                    insert_cart($_SESSION['user']['id'],$cart['0'],$cart['3'],$cart['1'],$cart['4'],$cart['5'],$cart['6'],$idbill);
                }
                $_SESSION['cart']=[];

            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "./view/cart/billconfirm.php";
            break; 

        
            // MENU
        case "daychuyen":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="day";
            }
            if(isset($_POST['sx'])){
                $sx = $_POST['sx'];
            }else{
                $sx = 1;
            }
            $sale = 0.9;
            $dc = locsp($loai,$name,$sx);
            include "./view/menu/daychuyen.php";
            break;
        case "nhan":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="nhan";
            }
            if(isset($_POST['sx'])){
                $sx = $_POST['sx'];
            }else{
                $sx = 0;
            }
            $sale = 0.9;
            $nhan = locsp($loai,$name,$sx);
            include "./view/menu/nhanbig.php";
            break;
        case "dongho":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="đồng";
            }
            if(isset($_POST['sx'])){
                $sx = $_POST['sx'];
            }else{
                $sx = 0;
            }
            $sale = 0.9;
            $dongho = locsp($loai,$name,$sx);
            include "./view/menu/dongho.php";
            break;
        case "hoatai":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="tai";
            }
            if(isset($_POST['sx'])){
                $sx = $_POST['sx'];
            }else{
                $sx = 0;
            }
            $sale = 0.9;
            $ht = locsp($loai,$name,$sx);
            include "./view/menu/hoatai.php";
            break;
        case "vongtay":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="tay";
            }
            if(isset($_POST['sx'])){
                $sx = $_POST['sx'];
            }else{
                $sx = 0;
            }
            $sale = 0.9;
            $vt = locsp($loai,$name,$sx);
            include "./view/menu/vongtay.php";
            break;
        case "timkiem":
                include "./view/timkiem.php";
                break;
        case "gioithieu":
            include "./view/gioithieu.php";
            break;
        case "tintuc":
            include "./view/tintuc.php";
            break;
        default:
            include "./view/home.php";
            break;

    }
}else{
    include "./view/home.php";
}
include "./view/footer.php";



?>