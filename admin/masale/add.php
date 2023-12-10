<br>
<br>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .form1 {
    width: 500px;
    height: auto; /* Change height to auto for dynamic content */
    margin-top: 50px;
    margin-left: 33%;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .2);
    padding: 20px; /* Add padding for better spacing */
    box-sizing: border-box; /* Include padding in the total width/height */
}

.form1 h2 {
    text-align: center;
    font-size: 30px;
}

.form1 table {
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px; /* Adjusted margin-top for better spacing */
}

.form1 table tr {
    margin-bottom: 20px; /* Add margin between table rows for better spacing */
}

.form1 table td {
    padding: 10px; /* Add padding for better spacing */
}

.sb {
    margin-top: 20px; /* Adjusted margin-top for better spacing */
    height: 40px;
    width: 120px;
    background-color: #4CAF50;
    color: #fff; /* Set text color to white for better visibility */
    border: none;
    cursor: pointer;
    margin-left: 40%;
}

.sc {
    margin-top: 20px; /* Adjusted margin-top for better spacing */
    text-align: center;
}

.sc a {
    color: black;
    font-size: larger;
    text-decoration: none;
}

/* Add some styles to the input fields for better appearance */
.form1 input[type="text"] {
    width: 100%;
    padding: 8px;
    margin: 4px 0;
    box-sizing: border-box;
}

/* Add hover effect for better interactivity */
.sb:hover {
    background-color: #45a049;
}

    </style>
</head>

<body>
    <div class="form1">
        <form action="index.php?act=addma" method="post">
            <h2>Thêm sản phẩm</h2>
            <table class="add">
                <tr>
                    <td>Nội dung mã</td>
                    <td><input type="text" name="noidung" id=""></td>
                </tr>
                <tr>
                    <td>Ngày tạo</td>
                    <td><input type="date" name="ngaytao" id=""></td>
                </tr>
                <tr>
                    <td>Ngày hết hạn</td>
                    <td><input type="date" name="ngayhet" id=""></td>
                </tr>
                <tr>
                    <td>Số lượng giảm</td>
                    <td>
                        <input type="text" name="sale" id="">
                    </td>
                </tr>
            </table>

            <input class="sb" type="submit" name="addma" value="Thêm">
            <div class="sc">
                <a href="index.php?act=listmasale"> Danh Sách</a>
            </div>

        </form>

    </div>
    <?php
    if (isset($thongbao)) {
        echo $thongbao;
    }
    ?>

</body>

</html>