<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<link rel="stylesheet" href="assets/css/login_css.css">
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
							<h1 class="fs-4 card-title fw-bold mb-4">Đăng nhập</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail</label>
									<input id="email" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Email không hợp lệ
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Mật khẩu</label>
										<a href="reset.php" class="float-end">
											Quên mật khẩu?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Mật khẩu là bắt buộc
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Nhớ tôi</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto" name="loginBtn">
										Đăng nhập
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Không có tài khoản? <a href="register.php" class="text-dark">Tạo tài khoản</a>
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
  if(isset($_POST['loginBtn'])){
    include('lib/sql_conn.php'); //Kết nối tới Database
      $sql = "SELECT * FROM employees";
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            if ($row["account"] == $_POST['username']) { //Kiểm tra account
              if ($row ["password"] == sha1($_POST['password'])) { //Kiểm tra password
                  $_SESSION['account'] = $row['account']; //Lưu tên đăng nhập
                    if($row['user_group'] == "admin" || $row['user_group']=="order"){
                      $_SESSION['user_group']=$row['user_group'];
                      header('Location: http://localhost/htql-master/index.php');
                    }
                    else
                      header('Location: emp.php');
              } else {
                echo "<script>alert('Sai mật khẩu')</script>";
              }
            }                                              
          }
        }else{
          echo "<script>alert('Tài khoản không tồn tại')</script>";
        }
        die();
  }
?>
	<script src="assets/js/login.js"></script>
</body>
</html>