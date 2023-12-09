<?php
    function tongdonhang(){
        $tong=0;
        foreach(($_SESSION['mycart']) as $cart){
            $ttien = $cart[4] * $cart[5];
            $tong +=$ttien;
        }
        return $tong;
    }
    function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
        $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insert_cart($iduser,$idpro,$image,$name,$price,$soluong,$thanhtien,$idbill){
        $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$image','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql = "SELECT * FROM bill WHERE id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function loadall_bill($kyw="",$iduser){

        $sql = "SELECT * FROM bill WHERE 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;
        if($kyw!="") $sql.=" AND id LIKE '%".$kyw."%'";
        $sql.=" ORDER BY id DESC";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadall_cart($idbill){
        $sql = "SELECT * FROM cart WHERE idbill =".$idbill;
        $bill = pdo_query($sql);
        return $bill;
    }
    function select_cart($id){
        $sql = "SELECT * FROM cart WHERE idbill =".$id;
        $bill = pdo_query($sql);
        return $bill;
    }

    function loadall_cart_count($idbill){
        $sql = "SELECT * FROM cart WHERE idbill =".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
    function bill_chi_tiet($listbill){
        global $img_path;
        $tong =0;
        $i=0;
        foreach($listbill as $cart){
            $ttien = $cart['price'] * $cart['soluong'];
            echo '
            <div class="sanpham">
                <img src="'.$cart['img'].'" alt="Hình ảnh sản phẩm 1">
                <div class="sp-info">
                <p>Tên sản phẩm: '.$cart['name'].'</p>
                <p>Giá: $'.$cart['price'].'</p>
                <p>Số lượng: '.$cart['soluong'].'</p>
                </div>
            
            </div>';
            $tong+=$ttien;
            $i+=1;
        }  
    }
    function delete_cart($id){
        $sql = "DELETE FROM cart WHERE idbill=".$id;
        pdo_execute($sql);
        return pdo_execute($sql);
    }
    function xoabill($id){
        delete_cart($id);
        $sql = "UPDATE bill set bill_status =5 WHERE id=".$id;
        return pdo_execute($sql);
    }
    function get_ttdh($n){
        switch($n){
            case 0 :
                $tt = "Đơn hàng mới";
                break;
            case 1 :
                $tt = "Đang xử lí";
                break;
            case 2 :
                $tt = "Đang giao hàng";
                break;
            case 3 :
                $tt = "Hoàn tất";
                break;
            case 4 :
                $tt = "Bị hủy bởi người bán";
                break;
            case 5 :
                $tt = "Bị hủy bởi người mua";
                break;
            default :
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }
?>




