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
    </style>
</head>
<body>
    <?php
        if(is_array($bill)){
            echo '<table>';
            echo '<tr>';
            echo '<th>Mã Đơn</th>';
            echo '<th>Tên sp</th>';
            echo '<th>Ảnh sp</th>';
            echo '<th>Giá sp</th>';
         
            echo '</tr>';
            
            foreach($bill as $b){
                extract($b);
                echo '<tr>';
                echo '<td>'.$idbill.'</td>';
                echo '<td>'.$name.'</td>';
                echo '<td><img src="'.$img.'" alt=""></td>';
                echo '<td>'.$price.'</td>';
               
                echo '</tr>';
            }

            echo '</table>';
        }
    ?>
</body>
</html>
