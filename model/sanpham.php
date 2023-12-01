<?php
function loadsp_kc(){
    $sql="select * from sanpham where name like '%kc%' order by luotxem desc limit 0,5";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 5,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top5(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,5";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function select_nhan(){
    $sql = "SELECT * FROM sanpham WHERE name like '%nhan%'";
    $nhan = pdo_query($sql);
    return $nhan;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where trangthai = 0 ";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
// các sản phẩm có danh mục là nhẫn nam
function loadall_sanpham_dcn(){
    $sql="select * from sanpham where iddm=40";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($name, $masp, $price,$img,$mota,$iddm){
    $sql="insert into sanpham(name,masp,price,img,mota,iddm) values('$name','$masp','$price','$img','$mota','$iddm')";
    pdo_execute($sql);
}
// insert ảnh 
function insert_image($image1,$image2,$idpro){
    $sql="insert into image(image1,image2,idpro ) values('$image1','$image2','$idpro')"; 
    pdo_execute($sql);
}

// xóa cứng 
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    delete_binhluan2($id);
    pdo_execute($sql);
}
// xóa sản phẩm xóa luôn cả bình luận thông qua idpro
 function locsp($loai,$sapxep){
    $sql = 'SELECT * FROM sanpham WHERE 1';
    if($loai!=""){
        $sql.= 'masp like "'.$loai.'"';
    }
    if($sapxep!=""){
        $sql.= 'oder by id "'.$sapxep.'"';
    }
    $sp = pdo_query($sql);
    return $sp;
 }




function update_sanpham($id,$iddm,$name, $masp,$price,$mota,$img){
    if($img!=""){
        $sql="update sanpham set iddm='".$iddm."', name='".$name."', masp='".$masp."',price='".$price."',mota='".$mota."',img='".$img."' where id=".$id;
    }
    else
    $sql="update sanpham set iddm='".$iddm."',name='".$name."', masp='".$masp."',price='".$price."',mota='".$mota."' where id=".$id;

    pdo_execute($sql);
}
function update_image($id,$image){
   
    $sql="update image set image1='".$image."' where id=".$id;
    // echo $sql;die;
    
    pdo_execute($sql);
}

function load_image($id){
    $sql= "SELECT * FROM image WHERE id=".$id;
    $img  = pdo_query_one($sql);
    return $img;
}
function loadall_image(){
    $sql= "SELECT * FROM image";
    $listimg  = pdo_query($sql);
    return $listimg;
}
?>
