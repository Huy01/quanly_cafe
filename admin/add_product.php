<?php 
	session_start();
	error_reporting(E_PARSE);
	include '../lib/sql_conn.php';
	if (isset($_SESSION['account']) && $_SESSION['user_group']=="admin") { //Kiểm tra có login hay chưa, nếu có thì biết $_SESSION sẽ có giá trị là tài khoản vừa nhập
        //kiểm tra sự kiện nhấn nút addpr
        if (isset($_POST['addpr'])) {
            //kiểm tra xem có nhập đầy đủ thông tin hay không
            if ($_POST['pName']=="" || $_POST['pPrice']=="" || $_POST['pPhoto']=="" || $_POST['pSpecies']=="") {
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin!');</script>";
            } else {
                //kiểm tra xem có tồn tại ảnh được chọn hay không
                if (isset($_FILES['product-img']['name'])) {
                    //kiểm tra xem ảnh được chọn có đuôi .jpg, .png hay không
                    if (strpos($_FILES['product-img']['name'], '.jpg') || strpos($_FILES['product-img']['name'], '.png')) {
                        //kiểm tra xem ảnh được chọn có tồn tại trong thư mục hay không
                        if (file_exists('../assets/images/'.$_FILES['product-img']['name'])) {
                            echo "<script>alert('Ảnh đã tồn tại!');</script>";
                        } else {
                            //thực hiện upload ảnh
                            move_uploaded_file($_FILES['product-img']['tmp_name'], '../img/product/'.$_FILES['product-img']['name']);
                            //thực hiện thêm sản phẩm vào cơ sở dữ liệu
                            $insert = "INSERT INTO product (name, price, thumb_img, species) VALUES ('".$_POST['pName']."', '".$_POST['pPrice']."', '".$_POST['pPhoto']."', '".$_POST['pSpecies']."')";
                            $insert_query = mysqli_query($conn, $insert);
                            echo "<script>alert('Thêm sản phẩm thành công!');</script>";
                            //sau khi thêm sản phẩm thành công, 1s sau chuyển về trang quản lý sản phẩm
                            header("Refresh:1; url=../admin/product.php");
                        }
                    } else {
                        echo "<script>alert('Vui lòng chọn đúng định dạng ảnh!');</script>";
                    }
                } else {
                    //thực hiện thêm sản phẩm vào cơ sở dữ liệu
                    $insert = "INSERT INTO product (name, price, thumb_img, species) VALUES ('".$_POST['pName']."', '".$_POST['pPrice']."', '".$_POST['pPhoto']."', '".$_POST['pSpecies']."')";
                    $insert_query = mysqli_query($conn, $insert);
                    echo "<script>alert('Thêm sản phẩm thành công!');</script>";
                    //sau khi thêm sản phẩm thành công, 1s sau chuyển về trang quản lý sản phẩm
                    header("Refresh:1; url=../admin/product.php");
                }
            }
        }
	} else {
		header('Location: ./signin.php'); //Nếu không phải tài khoản admin thì chuyển về trang login.php
	}
 ?>