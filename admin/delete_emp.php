<?php 
	session_start();
	error_reporting(E_PARSE);
	include '../lib/sql_conn.php';
	if (isset($_SESSION['account']) && $_SESSION['user_group']=="admin") { //Kiểm tra có login hay chưa, nếu có thì biết $_SESSION sẽ có giá trị là tài khoản vừa nhập
		
		if (isset($_GET['delete'])) {
			$delete = "DELETE FROM employees WHERE id = '".$_GET['delete']."'";
			// echo $delete;
			$delete_query = mysqli_query($conn, $delete);
			if ($delete_query) {
				echo "<script>alert('Xóa thành công');</script>";
				echo "<script>window.location.href='employee.php';</script>";
			}
			else{
				echo "<script>alert('Xóa thất bại');</script>";
				echo "<script>window.location.href='employee.php';</script>";
			}
		}
	} else {
		header('Location: login.php'); //Nếu không phải tài khoản admin thì chuyển về trang login.php
	}
 ?>