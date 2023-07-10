<?php
include "koneksi.php";
$query = "DELETE FROM kamar WHERE id='" . $_GET["id"] . "'";

if ( mysqli_query($conn, $query)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

header('Location: admin_kamar.php');
exit();