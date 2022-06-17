<?php
	session_start();
	include '../lib/sql_conn.php';
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$select = "SELECT * FROM product WHERE id IN ('".$id."')";
		$result = mysqli_query($conn, $select);
		if ($result->num_rows > 0)
			while ($row = mysqli_fetch_assoc($result)) {
				// echo "Xoa: ".$row['name'];
				unset($_SESSION['cart'][$row['id']]);
				header('Location: ../admin/dathang.php');
			}
	}
	exit();
?>