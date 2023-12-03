<?php
include_once './model/pdo.php';
include_once './model/sanpham.php';

function search_sanpham($keyword) {
    $sql = "SELECT * FROM sanpham WHERE name LIKE :keyword";
    $pdo = pdo_get_connection();
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['keyword' => '%' . $keyword . '%']);
    return $stmt->fetchAll();
}

if (isset($_POST['timkiem'])) {
    $keyword = $_POST['kyw'];
    $result = search_sanpham($keyword);

    echo '<head>';
    echo '<style>
    h1{
        color: red;
        text-align: center;
    }
            .search-results {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }

            .spnb {
                width: 300px;
                margin: 10px;
                border: 1px solid #ccc;
                padding: 10px;
            }

            .spnb img {
                max-width: 100%;
                height: auto;
            }

            .tt {
                text-align: center;
            }
          </style>';
    echo '</head>';
    echo '<body>';
    echo '<h1>Từ khoá bạn tìm là: "' . htmlspecialchars($keyword, ENT_QUOTES) . '"</h1>';
    echo '<div class="search-results">';
    foreach ($result as $row) {
        extract($row);
        $hinh = $img_path . $img;
        $sale = $price * 11 / 10;
        $linksp = "index.php?act=sanphamct&idsp=" . $id;

        echo '
        <div class="spnb mb">
            <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
            <div class="tt">
                <h5>' . $name . '</h5>';

        if (isset($sale)) {
            echo '<p>Giá gốc: <del>' . $sale . '</del></p>';
        }

        echo '<h3>' . $price . '</h3>
            </div>
            <a href="' . $linksp . '"><input type="button" value="Chi tiết"></a>
        </div>';
    }

    echo '</div>';
    echo '</body>';
}
?>
