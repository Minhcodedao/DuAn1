<div class="tb">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Password</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>ROLE</th>
            <th>
                <a href="index.php?act=addtk"><input class="custom-icons2" type="button" value="Thêm "></a>
            </th>
        </tr>

        <?php
        foreach ($listtk as $taikhoan) {
            extract($taikhoan);

            $xoatk = "index.php?act=xoatk&id=" . $id;
            $suatk = "index.php?act=suatk&id=" . $id;
            echo '
                <tr>
                    <td>' . $id . '</td>
                    <td>' . $user . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $role . '</td>
                    <td>
                        <a href="' . $xoatk . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa tài khoản không?\');">
                            <input class="custom-icons3" type="button" value="Xóa">
                        </a>
                        <a href="' . $suatk . '">
                            <input class="custom-icons2" type="button" value="Sửa">
                        </a>
                    </td>
                </tr>';
        }
        ?>

    </table>
</div>
