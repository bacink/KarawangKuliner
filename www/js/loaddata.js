$(document).ready(function () {
	 var url="http://www.karawangkuliner.com/data/tbkecamatan.php";
	 $.getJSON(url,function(result){
	 console.log(result);
	 $.each(result, function(i, field){
	 var value=field.id;
	 var label=field.kecamatan;
	 $("#list-kecamatan").append(" <li><a href='#' class='lokasi' data-kecamatan='"+label+"'>"+label+"</a></li>");
	 });
	 });	 
});			

