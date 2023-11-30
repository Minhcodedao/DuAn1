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
function loadall_spbc(){
    $sql = "SELECT sp.id, sp.name, COUNT(*) as soluong_mua
            FROM sanpham sp
            JOIN bill bd ON sp.id = bd.idsp
            GROUP BY sp.id, sp.name
            ORDER BY soluong_mua DESC";
    $listspbc= pdo_query($sql);
    return $listspbc;

}
?>
