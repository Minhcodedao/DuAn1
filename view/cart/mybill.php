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
.huy_don{
    
        width: 100%;
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
            <table>
            <tr>
                <th>MÃ ĐƠN HÀNG</th>
                <th> Tên sản phẩm </th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>SỐ LƯỢNG MẶT HÀNG</th>
                <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>Thao Tác </th>


            </tr>
            <?php
                if(is_array($listbill)){
                    foreach ($listbill as $bill){
                        extract($bill);
                        // hủy đơn hàng
                        $xoabill = "index.php?act=xoabill&id=" . $id;
                        
                        $ttdh= get_ttdh($bill['bill_status']);
                        $countsp = loadall_cart_count($bill['id']);
                        echo'
                            <tr>

                                <td>DAM_'.$bill['id'].'</td>
                                <td> </td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td><a href="'.$xoabill.'">
                                <input class="huy_don" type="button" value="Hủy Đơn">
                                </a>
                                </td>
                            

                                
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