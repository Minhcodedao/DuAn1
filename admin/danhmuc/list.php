
<div class="tb">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Tên DANH MUC</th>
               
                <th>
                Hành động
                </th>
                
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
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadm.'"><input  class="custom-icons1 type="button" value="Sửa"></a>
                      <a href="'.$xoadm.'"><input  class="custom-icons1 type="button" value="Xóa"></a></td>
                </tr>
                    ';
                }
            ?>
           
        </table>
    </div>