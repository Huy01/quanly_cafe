<?php session_start(); 
    $id = $_GET['id'];
    $quantity = $_GET['quantity'];
	if(isset($_SESSION['cart'][$id])){
	  $qty = $_SESSION['cart'][$id] + $quantity;
	}else{
	  $qty = $quantity;
	}
	$_SESSION['cart'][$id] = $qty;
	header("location:../admin/dathang.php");
	exit();
?>