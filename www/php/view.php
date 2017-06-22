<?php
include "config.php";
$data=array();
$q=mysqli_query($con,"SELECT * FROM `tb_kecamatan` WHERE `id_kabkota` = 3215 ORDER BY `nama` ASC ");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>