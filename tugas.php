/**
Piramida Bintang dengan perulangan
 */
<?php
	$bintang=10;
	for($a=1; $a<=$bintang; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$bintang; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>