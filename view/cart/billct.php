<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            height: 50px;
            width: auto;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 100px;
            height: auto;
            border-radius: 4px;
        }
        .qv{
            width: 90px;
            list-style-type: none;
            margin-bottom: 15px;
            background-color: red;
            text-align: center;
            border: none;
            border-radius: 5px;
            padding: 1px;
        }
        .qv a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="qv">
        <a href="index.php?act=mybill">< Quay về</a>
    </div>
    <?php
        if(is_array($bill)){
            echo '<table>';
            echo '<tr>';
            echo '<th>Mã sp</th>';
            echo '<th>Tên sp</th>';
            echo '<th>Ảnh sp</th>';
            echo '<th>Giá sp</th>';
            echo '<th>Số lượng</th>';
         
            echo '</tr>';
            
            foreach($bill as $b){
                extract($b);
                echo '<tr>';
                echo '<td>'.$idpro.'</td>';
                echo '<td>'.$name.'</td>';
                echo '<td><img src="'.$img.'" alt=""></td>';
                echo '<td>$'.$price.'</td>';
                echo '<td>'.$soluong.'</td>';
               
                echo '</tr>';
            }

            echo '</table>';
        }
    ?>
</body>
</html>
