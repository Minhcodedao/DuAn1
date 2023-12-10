<div class="tb">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NỘI DUNG</th>
            <th>NGÀY TẠO</th>
            <th>NGÀY HẾT HẠN</th>
            <th>SỐ LƯỢNG GIẢM (%)</th>
            <th>
                <a href="index.php?act=addma"><input class="custom-icons2" type="button" name="them" value="Thêm"></a></td>
                <!--thêm ảnh láy theo idpro  -->
            </th>

            <?php
            foreach ($listma as $ma) {
                extract($ma);
                $xoasp = "index.php?act=xoama&id=" . $id;
                echo '
                    <tr>
                        <td>' . $id . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . $ngaytao . '</td>
                        <td>' . $ngayhet . '</td>
                        <td>' . $sale . '</td>
                        <td>
                            <a href="' . $xoasp . '"><input class="custom-icons3" type="button" value="Xóa" onclick="return confirm (\'Bạn có muốn xóa sản phẩm không ? \')"></a>
                        </td>
                    </tr>';    
            }?>
         
    </table>
    <?php
    if(isset($thongbaox)){
        echo $thongbaox;
    }

    ?>

</div>