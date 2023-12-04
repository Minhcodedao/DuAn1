<?php
function loadall_thongke_sanham_dm()
{
    // Viết câu lệnh để lấy thông tin thống kê sản phẩm theo từng danh mục

    $sql = "SELECT dm.id, dm.name, COUNT(*) as soluong, MIN(sp.price) as min, MAX(sp.price) as max
            FROM danhmuc dm  
            JOIN sanpham sp ON dm.id = sp.iddm
            GROUP BY dm.id, dm.name
            ORDER BY soluong ASC";
    
    return pdo_query($sql);
}
// thông kê các sản phẩm được mua nhiều nhất
function loadall_thongke_sanham_dm_gg()
{
    $sql = "SELECT dm.name, COUNT(*) as soluong
            FROM danhmuc dm  
            JOIN sanpham sp ON dm.id = sp.iddm
            GROUP BY dm.id, dm.name
            ORDER BY soluong ASC";
    
    return pdo_query($sql);
}
// thông kê các sản phẩm có nhiều nhất trong bill


// thông kê các sản phẩm được mua nhiều nhất
 function load_top10_sanpham_banchay(){
$sql=  " SELECT idpro,img,name, COUNT(idpro) AS total_quantity FROM cart GROUP BY idpro, img, name ORDER BY total_quantity DESC LIMIT 10";
return pdo_query($sql);
}
 function load_sptonkho(){
    $sql = "SELECT s.id,s.name,s.img ,s.price FROM sanpham s WHERE NOT EXISTS ( SELECT 1 FROM cart c WHERE c.idpro = s.id)";
    return pdo_query($sql);
}
function load_doanhthu(){
    $sql = "SELECT ngaydathang, SUM(total) AS doanhthu
    FROM bill
    GROUP BY ngaydathang;
    ";
    return pdo_query($sql);
}
function load_doanhthu_gg(){
    // tông doanh thu 
    $sql = "SELECT SUM(total) AS doanhthu
    FROM bill
    ";
    return pdo_query($sql);
}
?>
