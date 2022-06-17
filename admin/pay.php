<?php
	session_start();
	include('../lib/sql_conn.php');
	date_default_timezone_set("Asia/Ho_Chi_Minh");

    $select_id = "SELECT MAX(CAST(id AS int)) AS id FROM bill";
    $select_id_result = mysqli_query($conn, $select_id);
    if ($select_id_result->num_rows > 0) {
    	while ($row1 = mysqli_fetch_assoc($select_id_result)) {
    		$id = $row1['id'];
    		if ($id=="") {
    			$id = 0;
    		} else {
    			$id += 1;
    		}
    		
    	}
    }
if ($_SESSION['cart']['total'] > 0) {
	$add_bill = "INSERT INTO bill VALUES ('".$id."', '".date("Y-m-d h:m:s")."', '".$_SESSION['account']."', '".$_SESSION['cart']['total']."')";
    $add_bill_query = mysqli_query($conn, $add_bill); //Them vao bang bill
    echo $add_bill;
	foreach($_SESSION['cart'] as $key=>$value){
      $cart_select = "SELECT * FROM product WHERE id = '".$key."'";
      $cart_query = mysqli_query($conn, $cart_select);
      if($cart_query->num_rows > 0){
        while($row0 = mysqli_fetch_assoc($cart_query)){ 
            $add = "INSERT INTO detail_bill VALUES ('".$id."' ,'".$row0['name']."', '".$_SESSION['cart'][$row0['id']]."', '".$_SESSION['cart'][$row0['id']]*$row0['price']."', '".$key."')";
            $add_query = mysqli_query($conn, $add);
            echo $add.'<br>';
            unset($_SESSION['cart'][$row0['id']]);
        }
        $_SESSION['paid'] = "yes";
      }else{
        $_SESSION['paid'] = "no";
      }
    }
}
else{
    $_SESSION['paid'] = "no";
        
}
header('Location:../admin/dathang.php');
?>