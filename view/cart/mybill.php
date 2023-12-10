<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.mybill{

    width: 100%;
    height: 100%;
    margin: 0 auto;
    padding: 0;
    background-color: #fff;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    color: #333;
    line-height: 18px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 5px #ddd;
    margin-top: 20px;
}
.mybill div:nth-child(1){

    width: 100%;
    height: 50px;
    line-height: 50px;
    background-color: gray;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    border-radius: 5px 5px 0 0;
}
.mybill div:nth-child(2){


    width: 100%;
    height: 100%;
    padding: 10px;
    text-align: center;
}
.mybill div:nth-child(2) table{

    width: 100%;
    height: 100%;
    border-collapse: collapse;
    text-align: center;
}
.mybill div:nth-child(2) table tr th{

    border: 1px solid #ddd;
    padding: 5px;
    background-color: #ddd;
}
.mybill div:nth-child(2) table tr td{
    
    border: 1px solid #ddd;
    padding: 5px;
}
th:last-child{
    text-align: center;
}
.nut{
    width: 100%;
    text-align: center;
    display: flex;
  
}
.nut a{
    width: 50%;
}
.huy_don{
    width: 80px;
    height: 30px;
    background-color: red;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}








    </style>
</head>
<body>
    <div class="mybill">
        <div class="">ĐƠN HÀNG CỦA BẠN</div>
        <div class="">
            <table style="text-align: center;">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Người mua</th>
                <th>Ngày đặt hàng</th>
                <th>Số mặt hàng</th>
                <th>Giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Thao Tác </th>
                <th>
                    Chi tiết
                </th>
          


            </tr>
            <?php
                if(is_array($listbill)){
                    foreach ($listbill as $bill){
                        extract($bill);
                        // hủy đơn hàng
                        $xoabill = "index.php?act=xoabill&id=" . $id;
                        $billct = "index.php?act=billct&id=" . $id;
                        if($bill_status=="0"){
                            $hd = '<a href="'.$xoabill.'"><input class="huy_don" type="button" value="Hủy Đơn"></a>';
                        }else{
                            $hd= "";
                            
                        }

                        if($bill_status=="5"){
                            $huy = '<input class="huy_don" type="button" value="Đã hủy">';
                        }
                        else{
                            $huy = '<a href="'.$billct.'"><input class="huy_don" type="button" value="Chi tiết"></a>';
                        }
                        
                        $ttdh= get_ttdh($bill['bill_status']);
                        $countsp = loadall_cart_count($bill['id']);
                        echo'
                            <tr>

                                <td>DAM_'.$bill['id'].'</td>
                                <td>'.$bill['bill_name'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>$'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$hd.'</td>
                                <td>'.$huy.'</td>
                            

                                
                            </tr>
                        ';
                    }
                }
            ?>
            </table>
        </div>
    </div>

</body>
</html>