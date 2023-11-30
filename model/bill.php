<?php
function loadall_bill( $kyw ,$iduser){
    $sql = "SELECT * FROM bill where 1";
    if($iduser>0 ) $sql .= " AND iduser=".$iduser;
    if($kyw != "") $sql .= " AND id LIKE '%$kyw%'";
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
// delete bill
function delete_bill($id){
  $sql = "DELETE FROM bill WHERE id=$id";
  pdo_execute($sql);
}
// update bill
function update_bill($id,$iduser,$bill_name,$bill_tel,$bill_email,$bill_address,$bill_status,$total,$ngaydathang){
    $sql = "UPDATE bill SET iduser='$iduser',bill_name='$bill_name',bill_tel='$bill_tel',bill_email='$bill_email',bill_address='$bill_address',bill_status='$bill_status',total='$total',ngaydathang='$ngaydathang' WHERE id=$id";
    pdo_execute($sql);
}




?>




