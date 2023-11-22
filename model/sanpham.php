<?php
function loadsp_kc(){
    $sql="select * from sanpham where iddm=37 order by luotxem desc limit 0,5";
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

// 
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
function insert_sanpham($name,$price,$img,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$name','$price','$img','$mota','$iddm')";
    pdo_execute($sql);
}
// insert ảnh 
function insert_image($image1,$image2,$image3,$idpro){
    $sql="insert into image(image1,image2,image3,idpro ) values('$image1','$image2','$image3','$idpro')"; 
    pdo_execute($sql);
}

// xóa cứng 
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    delete_binhluan2($id);
    pdo_execute($sql);
}
// xóa sản phẩm xóa luôn cả bình luận thông qua idpro





function update_sanpham($id,$iddm,$name,$price,$mota,$img){
    if($img!=""){
        $sql="update sanpham set iddm='".$iddm."', name='".$name."',price='".$price."',mota='".$mota."',img='".$img."' where id=".$id;
    }
    else
    $sql="update sanpham set iddm='".$iddm."',name='".$name."',price='".$price."',mota='".$mota."' where id=".$id;
    
    pdo_execute($sql);
    }
    ?>