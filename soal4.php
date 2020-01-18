<?php

function cetakGambar($angka) {
	if($angka % 2 != 1){
		echo "nilai harus ganjil";
	}else{
		for($i = 0; $i < $angka; $i++){
			for($j = 0; $j <= $angka; $j++) {
				if($j == 5 || $j==0){
					echo "* ";	
				}else if($i == 2){
					echo "* ";
				}else{
					echo "= ";
				}
			}
				echo "<br/>";
		}
	}

}

echo cetakGambar(5);

?>