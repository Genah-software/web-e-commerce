<?php
	error_reporting(0);
	//anggap ini database kamu
	$id_yang_di_db	= array( 
						array('25','Indonesia'),
						array('39','Malaysia') ,
						array('43','Thailand')
					);
	//form
	echo "<form method='post'>";
		for($i=0;$i<=count($id_yang_di_db)-1;$i++){
			echo "<input type='checkbox' name='pilih[".$id_yang_di_db[$i][0]."]' value='".$id_yang_di_db[$i][1]."'>".$id_yang_di_db[$i][1];
		}
		echo " <button>Cek</button>";
	echo "</form>";
	//form
	
	
	//output
	echo "<form method='post'>";
		for($i=0;$i<=count($id_yang_di_db)-1;$i++){
			$id = $id_yang_di_db[$i][0];
			echo $_POST[pilih][$id];
		}
	//output
	
?>