<?php 
	session_start();
	error_reporting(0);
	$base_url = "localhost";
	
	function corp($i){
		switch($i){
			case "1";
				return "Visi dan Misi";
			break;
			case "2";
				return "Sejarah";
			break;
			case "3";
				return "Penghargaan";
			break;
		}
	}
	$conn = mysqli_connect('localhost','root','','kpop');
	function type_file($i){
		switch($i){
			case "1";
				return "Motor";
			break;
			case "2";
				return "Update Motor";
			break;
			case "0";
				return "Picture";
			break;
		}
		
	}
	function tgl($i){			
		$atgl = array(
		'01'=>'Januari',
		'02'=>'Februari',
		'03'=>'Maret',
		'04'=>'April',
		'05'=>'Mei',
		'06'=>'Juni',
		'07'=>'Juli',
		'08'=>'Agustus',
		'09'=>'September',
		'10'=>'Oktober',
		'11'=>'November',
		'12'=>'Desember',
		);
			$i	 	= explode(' ',$i);
			$xtgl = explode('-',$i[0]);
			$thn 	= $xtgl[0];
			$bln	= $xtgl[1];
			$date	= $xtgl[2];
			
			return $date." ".$atgl[$bln]." ".$thn;	
			 
	}
	function whois($i){
		
		return 'Daihatsu';
	}
?>
