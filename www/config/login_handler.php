<?php
session_start();
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../config/conn.php';

if ( isset($_POST['username'])){

$username 		= $_POST['username'];
$password 	= MD5($_POST['password']);

Connect::getConnection();
$query = @mysql_query("SELECT * FROM tb_user WHERE username='$username' and password='$password' ");

	$count=mysql_num_rows($query);
	$rs=mysql_fetch_array($query);
		if($count>0){
				$_SESSION['user_id']=$rs['id'];
				$_SESSION['user_group']=$rs['role'];
				$_SESSION['name']=$rs['fullname'];

			/**
			//detect  ip
			if(!empty($_SERVER['HTTP_CLIENT_IP'])){
				$ip=$_SERVER['HTTP_CLIENT_IP'];
				}
				elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
				}else{
				$ip=$_SERVER['REMOTE_ADDR'];
				}
				$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				//var Y,m,d,H,i,s;
				date_default_timezone_set('Asia/Jakarta');
				$waktu = date('Y'."-".'m'."-".'d'." ".'H'.":".'i'.":".'s');
			$log = mysql_query("UPDATE user SET 
											time_log	='$waktu',
											ip_address	= '$ip',
											host_pc		= '$hostname'
											WHERE idu = '$rs[idu]' ");
	
			**/
			
				echo "sukses";
			} else {
			
				echo "gagal";
			}

//Connect::close();
}
?>