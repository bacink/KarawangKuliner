<?php

	include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../config/conn.php';
	Connect::getConnection();

		 $query_kecamatan = "SELECT * FROM `tb_kecamatan` WHERE `id_kabkota` = 3215 ORDER BY `nama` ASC ";
		 $kecamatan = mysql_query($query_kecamatan) or die(mysql_error());


			$akecamatan = array();
			$no=1;
			while ($row =mysql_fetch_assoc($kecamatan))

			{
				$temp = array(
								//'no' 						=> $no++,
								'id' 						=> $row['id'],
								'id_kabkota' 		=> $row['id_kabkota'],
								'kecamatan' 		=> $row['nama']);
				array_push($akecamatan, $temp);
			}
			$data = json_encode($akecamatan);
			echo $data;
?>
