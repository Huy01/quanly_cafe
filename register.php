<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
                    <img src="assets/images/coffee-logo.png" alt="logo" width="300">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Đăng ký</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Họ tên</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Tên là bắt buộc	
									</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="usid">Mã người dùng</label>
									<input id="id_num" type="text" class="form-control" name="id_num" value="" required autofocus>
									<div class="invalid-feedback">
										Mã người dùng là bắt buộc	
									</div>
								</div>
								

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Email là bắt buộc
									</div>
								</div>
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="username">Tên đăng nhập</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Tên đăng nhập là bắt buộc	
									</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Mật khẩu</label>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Mật khẩu là bắt buộc
							    	</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted">Số điện thoại</label>
									<input id="phone" type="text" class="form-control" name="phone" required>
								    <div class="invalid-feedback">
								    	Số điện thoại là bắt buộc
							    	</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted">Địa chỉ</label>
									<input id="address" type="text" class="form-control" name="address" required>
								    <div class="invalid-feedback">
								    	Địa chỉ là bắt buộc
							    	</div>
								</div>
                                <!--chọn Công việc -->
                                <div class="mb-3">
                                    <label class="mb-2 text-muted">Công việc</label>
                                    <select class="form-control" name="job">
                                        <option value="Quản lý">Quản lý</option>
                                        <option value="Chế biến">Chế biến</option>
                                        <option value="Phục vụ">Phục vụ</option>
                                        <option value="Order">Order</option>
                                    </select>

								<p class="form-text text-muted mb-3">
                                Bằng cách đăng ký, bạn đồng ý với các điều khoản và điều kiện của chúng tôi.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto" name="SignUpBtn">
										Đăng ký	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Đã có tài khoản? <a href="login.php" class="text-dark">Đăng nhập</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2022 &mdash; Quang Huy 
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php
        include 'lib/sql_conn.php';
        if(isset($_POST['SignUpBtn'])){
            $name = $_POST['name'];
            $id_num = $_POST['id_num'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            md5($password);
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $job = $_POST['job'];
            if($name == "" || $id_num == "" || $username == "" || $password == "" || $phone == "" || $address == "" || $job == ""){
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin')</script>";
            }
            else{
                $sql = "INSERT INTO `employees`(`fullname`, `id_num`, `account`, `password`, `phone`, `address`, `job`) VALUES ('$name','$id_num','$username','$password','$phone','$address','$job')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<script>alert('Đăng ký thành công')</script>";
                }
                else{
                    echo "<script>alert('Đăng ký thất bại')</script>";
                }
            }
        }
    ?>
	<script src="assets/js/login.js"></script>
</body>
</html>