<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>output pertemuan ke-2</title>
	<style type="text/css">
		body{
			font-family: courier;
			font-size: 20;
		}
		h1{
			text-align: center;
		}

	</style>
</head>
<body>
	<h1>OUTPUT PERTEMUAN 2 PAW</h1>
	<p>Pada PHP terdapat beberapa tipe data, yaitu:</p>
	<h2>1. STRING</h2>
	<?PHP
		echo("tipe data string dapat ditulis dengan 2 cara yaitu dengan menggunakan tanda kutip tunggal atau menggunakan tanda kutip ganda.<br> contoh string : <br>");
		$nama = "Nuhaliza";
		$alamat = "Kabupaten Sampang";
		echo("haloo nama saya ".$nama." saya berasal dari ".$alamat."<br>");
		echo("pada contoh diatas saya menggunakan 2 variabael dengan nama yang berbeda, dimana untuk variabel pertama saya isi dengan nama saya sendiri dan untuk variabel kedua merupakan alamat saya<br>");
	?>
	<h2>2. INTEGER</h2>
	<?php 
		echo("integer atau bilangan bulat merupakan tipe data yang berbentuk angka yang tidak ada komanya, penulisan tipe data integer ini berbeda dengan string yaitu tidak perlu menggunakan tanda petik tunggal maupun ganda.<br> contoh integer : <br>");
		$bil1 = 10;
		$bil2 = 77;
		$jumlah = $bil1+$bil2;
		var_dump($jumlah);
		echo("<br>jadi pada contoh diatas saya menggunakan 3 variabel dimana 2 variabel berisi angka yang berbeda dan variabel ke-3 merupakan hasil penjumlahan dari 2 variabel yang lain.");
	 ?>
	 <h2>3. FLOAT</h2>
	 <?PHP
	 	echo("tipe data float merupakan tipe data yang berisi bilangan desimal, sama halnya seperti integer float tidak perlu menggunakan tanda petik bedanya dengan integer adalah float merupakan angka yang ada komanya.<br>contoh float : <br>");
	 	$bil1 = 10;
		$bil2 = 3;
		$jumlah = $bil1/$bil2;
		var_dump($jumlah);
		echo("<br> pada contoh diatas saya menggunakan 3 variabel dimana variabel pertama dan keduamerupakan dua angka yang berbeda dan variabel ke-3 merupakan hasil baginya.<br>");
	 ?>
	 <h2>4. ARRAY</h2>
	 <?php 
	 	echo("array merupakan tipe data yang menyimpan banyak isi di dalam sebuah variabel, jadi bisa dibilang array merupakan tipe data yang terdiri dari kumpulan tipe data lainnya.<br>contoh array : <br>");
	 	$contoh =array('kurma','jambu','kelapa','mangga');
	 	echo("<br> menampilkan array 1 per 1:<br>");
	 	echo($contoh[0]."<br>");
	 	echo($contoh[1]."<br>");
	 	echo($contoh[2]."<br>");
	 	echo($contoh[3]."<br>");
	 	echo("menampilkan array dengan menggunakan perulangan: <br>");
	 	$jml = count($contoh);
	 	for ($i=0; $i < $jml; $i++) { 
	 		print("$i : $contoh[$i]<br>");
	 	}
	 ?>
</body>
</html>