<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        .timkiem2{
           position: relative;
              left: 70%;
              top: 67px;
               

        }
        .timkiem2 input[type=text] {
            width: 220px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            height: 30px;
            background-color: white;
        
            background-position: 10px 10px;
            background-repeat: no-repeat;
           

        }
        .timkiem2 input[type=submit] {
            width: 100px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
           
            
            background-color: white;
            color: black;
      height: 30px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            left: 10px;
            top: 0px;
        }

    </Style>

</head>

<body>


    <div class="tb">
        <div class="timkiem2">
            <!-- ô tìm kiếm -->
            <form action="index.php" method="post">
    <input type="text" name="kyw" placeholder="Tìm kiếm mã đơn">
    <input type="submit" name="submit" value="Tìm kiếm">
</form>

        </div>
        <table border="1">
            <!-- bao gồm id id user idpro img name price soluong thanhtien idbill -->
            <tr>
                <th> MÃ Đơn Hàng</th>
                <TH> Tên KH</TH>
                <th> Khách Hàng </th>
                <th> Thành Tiền </th>
                <th> Ngày Đặt </th>
                <th> Trạng Thái </th>
                <th> Thao Tác </th>
            </tr>
            <?php
            foreach ($listbill as $bill) {
                extract($bill);

                //Lấy name khách hàng khách hàng   thong qua id user
                $suabill = "index.php?act=suabill&id=" . $id;
                $xoabill = "index.php?act=xoabill&id=" . $id;

                $kh = "SDT: " . $bill['bill_tel'] . "
           <br> Email  " . $bill['bill_email'] . "
           <br>Address: " . $bill['bill_address'];

                // viet trang thai 0 don hang moi  1 dang xu li 2 dang giao 3 da giao
                $bill_status = $bill['bill_status'];
                if ($bill['bill_status'] == 0) {
                    $bill_status = "Đơn Hàng Mới";
                    $xoabill = "";
                } elseif ($bill['bill_status'] == 1) {
                    $bill_status = "Đang Xử Lí";
                    $xoabill = "";
                } elseif ($bill['bill_status'] == 2) {
                    $bill_status = "Đang Giao";
                    $xoabill = "";
                } elseif ($bill['bill_status'] == 3) {
                    $bill_status = "Đã Giao";
                    $xoabill = "";
                }
                elseif ($bill['bill_status'] == 5) {
                    $bill_status = "Hủy bởi người mua";
                    $xoabill = "<a href='".$xoabill."'><input class='custom-icons3' type='button' value='Xóa'></a>";
                }
                else{
                    $bill_status = "Đã Hủy";
                    $xoabill = "<a href='".$xoabill."'><input class='custom-icons3' type='button' value='Xóa'></a>";
                }

                echo "<tr>
                    <td>$id</td>
                    
                    <td>$bill_name</td>      
                    <td>$kh</td>  
                    <td>$total</td>
                    <td>$ngaydathang</td>
                    <td>$bill_status</td>
                    <td>
                        <a href='$suabill'><input class='custom-icons2' type='button' value='Sửa'></a>
                        $xoabill
                    
                </tr>";
            }

            ?>




        </table>
    </div>
</body>

</html>