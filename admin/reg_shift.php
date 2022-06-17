<?php 
	session_start();
	include '../lib/sql_conn.php';
	if (isset($_SESSION['account'])) {
		if (isset($_GET['shift']) && isset($_GET['day'])) {
			foreach ($_GET['day'] as $key) {
				foreach ($_GET['shift'] as $value) {
					$sel = "SELECT shiftName, dayOfShift FROM shifts WHERE empAccount = '".$_SESSION['account']."'";
					$sel_query = mysqli_query($conn, $sel);
					if ($sel_query->num_rows > 0) {
						while ($row = mysqli_fetch_assoc($sel_query)) {
							if ($row['shiftName'].$row['dayOfShift']==$value.$key){ 
								// header('Location: emp.php');
								echo "Trung";
								break 3;
								header('Location: emp.php');
							}
							else{
								// echo "Khong trung";
								$reg = "INSERT INTO shifts VALUES ('', '".$value."', '".$key."', '".$_SESSION['account']."', '100000')";
							}
						}
						  mysqli_query($conn, $reg);
					}else{
						$reg = "INSERT INTO shifts VALUES ('', '".$value."', '".$key."', '".$_SESSION['account']."', '100000')";
						// echo $reg;
						mysqli_query($conn, $reg);
					}					
				}
			}
		}
		else
			header('Location: emp.php');
	}else
	  	header('Location: login.php');
	header('Location: emp.php');
 ?>