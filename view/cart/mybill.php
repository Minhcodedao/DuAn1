<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mybill">
        <div class="">ĐƠN HÀNG CỦA BẠN</div>
        <div class="">
            <table>
            <tr>
                <th>MÃ ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>SỐ LƯỢNG MẶT HÀNG</th>
                <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
            </tr>
            <?php
                if(is_array($listbill)){
                    foreach ($listbill as $bill){
                        extract($bill);
                        $ttdh= get_ttdh($bill['bill_status']);
                        $countsp = loadall_cart_count($bill['id']);
                        echo'
                            <tr>
                                <td>DAM_'.$bill['id'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
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