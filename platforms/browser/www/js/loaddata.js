$(document).ready(function () {
 	$.ajax({
		type: "GET",
		url: 'http://www.karawangkuliner.com/data/tbkecamatan.php',
		//data: {id_percetakan:id_percetakan, data:'dtetalase'},
		dataType:"json",
			success: function(data){
			//console.log(data);
				obj = data;
				jQuery.each( obj, function(index, value ) {
				var label 						= data[index]['kecamatan'];
				var value						= data[index]['id'];
				//console.log(label);
				$("#list-kecamatan").append(" <li><a href='#' class='lokasi' data-kecamatan='"+label+"'>"+label+"</a></li>");
				//$("#id_kecamatan").append("<option>"+label+"</option>");
				});
			}
	});		 	
	
		//default
		$.ajax({
		type: "POST",
		url: 'http://www.karawangkuliner.com/data/tbproduk.php',
		//data: {id_percetakan:id_percetakan, data:'dtetalase'},
		dataType:"json",
			success: function(data){
			//console.log(data);
				obj = data;
				jQuery.each( obj, function(index, value ) {
				 
				 var id 			= data[index]['id']; 
				 var nama_usaha		= data[index]['nama_usaha'];
				 var nomor_kontak	= data[index]['nomor_kontak'];
				 var kecamatan		= data[index]['kecamatan'];
				 var jam_buka		= data[index]['jam_buka'];
				 var jam_tutup 		= data[index]['jam_tutup'];
				 var alamat 		= data[index]['alamat'];
				 var id_menus 		= data[index]['id_menus'];
				 var menu			= data[index]['menu'];
				 var foto 			= data[index]['foto'];
				 var price 			= data[index]['price'];

				//console.log(label);
				//ListDefault$("#list-kecamatan").append(" <li><a href='#' class='lokasi' data-kecamatan="+label+">"+label+"</a></li>");
				//$("#id_kecamatan").append("<option>"+label+"</option>");
				$("#ListDefault").append(" <div class='col-sm-6 col-md-4'><div class='thumbnail'><img src='img_produk/"+foto+"' alt='...' class='img-rounded'><div class='caption'><h4>"+menu+"</h4><p><span class='text-danger'>Rp. "+price+" </span><span class='pull-right'><button class='btn btn-sm btn-danger detail' data-id='"+id+"'><i class='fa fa-cutlery'></i></button><button class='btn btn-sm btn-primary'><i class='fa fa-map-marker'></i> "+kecamatan+" </button></span></p></div></div>   			  </div> ");	

				});
			}
		});		

});			

