
<div class="tb">
        <table border="1">
        <tr>
                <th>MÃ LOẠI</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>LƯỢT XEM</th>
                <th>Mô Tả</th>
                <th></th>
                <th>
                <a  href="index.php?act=addsp"><input class="custom-icons2" type="button" name="them" value="Thêm"></a></td>
                </th>
            <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $soft_delete="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh="Không có ảnh";
                    }
                    echo '
                    <tr>
                    
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td>'.$mota.'</td>
                    <td><a href="'.$suasp.'"><input class="custom-icons2" type="button" value="Sửa"></a>  
                   <td>   <a href="'.$xoasp.'"><input class="custom-icons2" type="button" value="Xóa Cứng" onclick="return confirm (\'Bạn có muốn xóa sản phẩm không ? \')"></a>
                  <a href="'.$soft_delete.'"><input class="custom-icons2" type="button" value="Xóa Mềm" onclick="return confirm (\'Bạn có muốn xóa sản phẩm không ? \')"></a>
                  </td>
                   
                </tr>
                    ';
                }
            ?>
        </table>
    </div>