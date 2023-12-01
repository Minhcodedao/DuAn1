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
// update bill cho phép update mỗi trạng thái của bill
function update_bill($id,$bill_status){
  $sql = "UPDATE bill SET bill_status=$bill_status WHERE id=$id";
  pdo_execute($sql);
}
// load one bill
function loadone_bill($id){
  $sql = "SELECT * FROM bill WHERE id=$id";
  $bill = pdo_query_one($sql);
  return $bill;
}





?>




