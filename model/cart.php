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
        if($kyw!="") $sql.=" AND id LIKE '%".$kyw."'";
        $sql.=" ORDER BY id DESC";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadall_cart($idbill){
        $sql = "SELECT * FROM cart WHERE idbill =".$idbill;
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
        echo'<tr>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
            </tr>';

        foreach($listbill as $cart){
            $hinh = $img_path.$cart['img'];
            $ttien = $cart['price'] * $cart['soluong'];
            echo '
                <tr>
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart['name'].'</td>
                    <td>$'.$cart['price'].'</td>
                    <td>'.$cart['soluong'].'</td>
                    <td>$'.$cart['thanhtien'].'</td>
                </tr>';
            $tong+=$ttien;
            $i+=1;
        }   
        echo'<tr>
                <td colspan="4"><strong>TỔNG ĐƠN HÀNG</strong></td>
                <td>$'.$tong.'</td>
            </tr>';
    }
?>




