<?php

	include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../config/conn.php';
	Connect::getConnection();

		//$id_members    = $_POST['id_members'];
		//$nota_transaksi    = '0617012';
		$query = " SELECT 
					a.id,
					a.nama_usaha,
					a.nomor_kontak,					
					a.kecamatan,
					a.jam_buka,
					a.jam_tutup,
					a.alamat,
					b.id as id_menus,
					b.menu,
					b.foto,
					b.price,
                    b.deleted_at
					FROM tb_members a inner join tb_menus b on a.id = b.id_members where b.deleted_at is null";
		$query_produk = mysql_query($query) or die(mysql_error());
		 //header('Content-Type:image/jpeg'); 
		 //create an array
		 $aquery_produk = array();
			while ($row =mysql_fetch_assoc($query_produk)) {
					$temp = array(
							 'id' 			=> $row['id'],
							 'nama_usaha'	=> $row['nama_usaha'],
							 'nomor_kontak'	=> $row['nomor_kontak'],
							 'kecamatan'	=> $row['kecamatan'],
							 'jam_buka'		=> $row['jam_buka'],
							 'jam_tutup' 	=> $row['jam_tutup'],
							 'alamat' 		=> $row['alamat'],
							 'id_menus' 	=> $row['id_menus'],
							 'menu' 		=> $row['menu'],
							 'foto' 		=> $row['foto'],
							 'price' 		=> $row['price']
							 
							 );

							array_push($aquery_produk, $temp);

							}

						$data =  json_encode($aquery_produk, JSON_PRETTY_PRINT);
						echo $data;
?>
