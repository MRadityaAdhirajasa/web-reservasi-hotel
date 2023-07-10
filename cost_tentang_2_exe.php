<?php
	if(ISSET($_POST['submit'])){
		$nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
		$conn->query("INSERT INTO kritik (nama, email, pesan) VALUES('$nama', '$email', '$pesan')");
		header("location:cost_tentang_2.php");
	}
?>