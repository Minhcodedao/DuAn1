
<div class="tb">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>IDPRO</th>
            <th>IMAGE 1</th>
            <th>IMAGE 2</th>
            <th>
            <a  href="index.php?act=addimage"><input class="custom-icons2" type="button" name="them" value="Thêm"></a></td>
            </th>
            
        </tr>
        <?php
            foreach($listimage as $img){
                extract($img);
                $img_path = "../upload/";
                $suaimg="index.php?act=suaimg&id=".$id;
                $hinh1 = '<img src="'.$img_path.''.$image1 .'?> " width="100px" height="80px">';
                $hinh2 = '<img src="'.$img_path.''.$image2 .'?> " width="100px" height="80px" >';
                echo '
                <tr>
                    <td>'.$id.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$hinh1.'</td>
                    <td>'.$hinh2.'</td>
                    <td>
                        <a href="'.$suaimg.'"><input  class="custom-icons2" type="button" value="Sửa"></a>
                    </td>
                </tr>';
            }
        ?>
        
    </table>

</div>