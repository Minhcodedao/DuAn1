
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(is_array($bill)){
           foreach($bill as $b){
            extract($b);
            $hinh = '<img src="'.$img.'" alt="">';
            echo'
                <p>Tên sp: '.$name.'</p>   
                <p>Ảnh sp: '.$hinh.'</p>   
                <p>Giá sp: '.$price.'</p>   
                <p>Số lượng sp: '.$name.'</p>   
            ';

           }
        }
    ?>


</body>
</html>