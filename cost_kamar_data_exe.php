<?php
	if(ISSET($_POST['submit'])){
        $nama = $_POST['nama'];
		$no_telp = $_POST['no_telp'];
        $checkin = $_POST['checkin'];
        $hari = $_POST['hari'];
        $jenis_pembayaran = $_POST['jenis_pembayaran'];

		$conn->query("INSERT INTO pesanan (`nama`, `no_telp`, `checkin`, `jenis_pembayaran`, `hari`) 
        VALUES ('$nama','$no_telp','$checkin','$jenis_pembayaran','$hari')");
		header("location:cost_kamar_2.php");
	}
?>