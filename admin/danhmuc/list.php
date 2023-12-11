
<div class="tb">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>
            <a  href="index.php?act=adddm"><input class="custom-icons2" type="button" name="them" value="Thêm"></a></td>
            </th>
        </tr>
        <?php
            foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '
                <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>
                        <a href="'.$suadm.'"><input  class="custom-icons2" type="button" value="Sửa"></a>
                        <a href="'.$xoadm.'"><input onclick="return confirm (\'Bạn có muốn xóa sản phẩm không ? \')"  class="custom-icons3" type="button" value="Xóa"></a>
                    </td>
                </tr>';
            }
        ?>
        
    </table>
     <?php

    ?>

    
</div>