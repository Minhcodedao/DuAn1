<div class="tb">
    <table border="1">
        <tr>
            <th>MÃ LOẠI</th>
            <th>TÊN SẢN PHẨM</th>
            <th>HÌNH</th>
            <th>GIÁ</th>
            <th>Mã sản phẩm</th>
            <th>Mô Tả</th>
            <th>
                Loại sản phẩm

            </th>
            <th>
                <a href="index.php?act=addsp"><input class="custom-icons2" type="button" name="them" value="Thêm"></a></td>
                <!--thêm ảnh láy theo idpro  -->
            </th>

            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $addimage = "index.php?act=addimage&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = "Không có ảnh";
                }
                
                $loai = loadone_danhmuc($iddm);
                echo '
                    <tr>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $masp . '</td>
                        <td>' . $mota . '</td>
                        <td>'.$loai['name'].'</td>
                        <td>
                            <a href="' . $suasp . '"><input class="custom-icons2" type="button" value="Sửa"></a>  
                            <a href="' . $xoasp . '"><input class="custom-icons3" type="button" value="Xóa" onclick="return confirm (\'Bạn có muốn xóa sản phẩm không ? \')"></a>
                            <a href="' . $addimage . '"><input class="custom-icons2" type="button" value="Thêm Ảnh"></a>
                        </td>
                    </tr>';    
            }?>
         
    </table>
</div>