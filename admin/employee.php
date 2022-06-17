<?php session_start(); 
  if(!isset($_SESSION['account']))
    header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hệ thống quản lý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <!-- <link href="../assets/css/material-kit.css?v=2.1.1" rel="stylesheet" /> -->
    <!-- SweetAlert2 -->
    <script src="../assets/js/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>
<body>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="../admin/dashboard.php" target="_blank">
            <img src="../assets/images/coffee-logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Hệ thống quản lý</span>
        </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link  active" href="../admin/dashboard.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>shop </title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                            <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                            <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Bảng điều khiển</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="../admin/dathang.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>office</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g id="office" transform="translate(153.000000, 2.000000)">
                            <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                            <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Đặt hàng</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="../admin/thongke.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>credit-card</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(453.000000, 454.000000)">
                            <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Sản phẩm</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="../admin/product.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>box-3d-50</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(603.000000, 0.000000)">
                            <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                            <path class="color-background opacity-6" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"></path>
                            <path class="color-background opacity-6" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Sản phẩm</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="../admin/employee.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>settings</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(304.000000, 151.000000)">
                            <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                            <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Nhân viên</span>
            </a>
            </li>
            <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Trang tài khoản</h6>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="../admin/emp.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>customer-support</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(1.000000, 0.000000)">
                            <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                            <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                            <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Trang cá nhân</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="/htql-master/logout.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>document</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(154.000000, 300.000000)">
                            <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Đăng xuất</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="/htql-master/sign-up.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>spaceship</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(4.000000, 301.000000)">
                            <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                            <path class="color-background opacity-6" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                            <path class="color-background opacity-6" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                            <path class="color-background opacity-6" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Đăng ký</span>
            </a>
            </li>
        </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')"></div>
            <div class="card-body text-start p-3 w-100">
            <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
            </div>
            <div class="docs-info">
                <h6 class="text-white up mb-0">Need help?</h6>
                <p class="text-xs font-weight-bold">Please check our docs</p>
                <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
            </div>
            </div>
        </div>
        <a class="btn bg-gradient-primary mt-3 w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree">Upgrade to pro</a>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Nhân viên</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Nhân viên</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                    <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Online Builder</a>
                    </li>
                    <li class="nav-item d-flex align-items-center dropdown">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <?php
                            include('../lib/sql_conn.php');
                            if(isset($_SESSION['account']) && $_SESSION['account']){
                            $name = "SELECT * FROM employees WHERE account = '".$_SESSION['account']."'";
                            $queryName = mysqli_query($conn, $name);
                            if($queryName->num_rows >0){
                                while($row = mysqli_fetch_assoc($queryName)){
                                if ($row['user_group']=="admin" || $row['user_group']=="order") {
                                    echo "Xin chào ".$row['fullname'];
                                }else{
                                    header("Location: sign-in.php");
                                }
                                }
                            }
                            } 
                        ?>
                        <span class="d-sm-inline d-none">
                        
                        </span>
                        
                    </a>
                    
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                            <div class="d-flex py-1">
                            <div class="my-auto">
                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">New message</span> from Laur
                                </h6>
                                <p class="text-xs text-secondary mb-0 ">
                                <i class="fa fa-clock me-1"></i>
                                13 minutes ago
                                </p>
                            </div>
                            </div>
                        </a>
                        </li>
                        <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                            <div class="d-flex py-1">
                            <div class="my-auto">
                                <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">New album</span> by Travis Scott
                                </h6>
                                <p class="text-xs text-secondary mb-0 ">
                                <i class="fa fa-clock me-1"></i>
                                1 day
                                </p>
                            </div>
                            </div>
                        </a>
                        </li>
                        <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                            <div class="d-flex py-1">
                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(453.000000, 454.000000)">
                                        <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                        </g>
                                    </g>
                                    </g>
                                </g>
                                </svg>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm font-weight-normal mb-1">
                                Payment successfully completed
                                </h6>
                                <p class="text-xs text-secondary mb-0 ">
                                <i class="fa fa-clock me-1"></i>
                                2 days
                                </p>
                            </div>
                            </div>
                        </a>
                        </li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        
        <div class="card-body ">
            <div class="tab-content text-center">
                <div class="tab-pane active" id="employee">
                    <section name="addEmployee">
                        <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Nhân viên</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thên nhân viên</li>
                        </ol>
                        </nav>
                        <form method="get" action="add_emp.php" onsubmit="return validateEmp()">
                        <div class="form-row">
                            <div class="col-4">
                            <label class="bmd-label-static">Họ tên*</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" >
                            </div>
                            <div class="col-2">
                            <label class="bmd-label-static">Số điện thoại*</label>
                            <input type="text" name="phone" id="phone" class="form-control" pattern="\d{10,10}">
                            </div>
                            <div class="col">
                            <label class="bmd-label-static">Số CMND*</label>
                            <input type="text" name="id_num" id="id_num" class="form-control" pattern="\d{9,12}">
                            </div>
                            <div class="col">
                            <label class="bmd-label-static">Địa chỉ*</label>
                            <input type="text" name="address" id="address" class="form-control" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-2">
                            <label class="bmd-label-static">Tài khoản*</label>
                            <input type="text" name="account" id="account" class="form-control" pattern="^[a-z0-9_-]{3,15}$">
                            </div>
                            <div class="col-2">
                            <label class="bmd-label-static">Mật khẩu*</label>
                            <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="col-3">
                            <select class="selectpicker show-tick" data-style="select-with-transition" name="job" id="job">
                                <option disabled selected>Công việc*</option>
                                <option value="Phục vụ">Phục vụ</option>
                                <option value="Chế biến">Chế biến</option>
                                <option value="Order">Order</option>
                            </select>
                            </div>
                            <div class="col">
                            <label class="bmd-label-static">Năm vào làm*</label>
                            <input type="text" name="start" id="start" class="form-control" pattern="\d{4,4}">
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-auto mr-auto"> </div>
                            <div class="col-auto">
                            <button class="btn btn-success" type="submit"><i class="material-icons">add</i> THÊM NHÂN VIÊN</button>
                            </div>
                            </div>
                        </form>
                        <script type="text/javascript">
                        function validateEmp(){
                            var fullname = document.getElementById('fullname').value;
                            var account = document.getElementById('account').value;
                            var password = document.getElementById('password').value;
                            var id_num = document.getElementById('id_num').value;
                            var address = document.getElementById('address').value;
                            var phone = document.getElementById('phone').value;
                            var job = document.getElementById('job').value;
                            var start = document.getElementById('start').value;

                            if (fullname!="" && account!="" && password!="" && id_num!="" && address!="" && phone!="" && job!="" && start!="") {
                            Swal.fire({
                                type: 'success',
                                title: 'Đã thêm nhân viên',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            return true;
                            }else{
                            alert("Vui lòng điền đủ thông tin có dấu *");
                            return false;
                            }
                            return false;
                        }
                        </script>
                        <hr>
                    </section>
                    <section name="listEmployee">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Nhân viên</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách nhân viên</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-auto mr-auto" id="numberOfEmployee">
                                <?php
                                include('../lib/sql_conn.php');
                                $numberOfEmployee = "SELECT COUNT(id) as total FROM employees";
                                $sqlCount = mysqli_query($conn, $numberOfEmployee); //Thực hiện truy vấn đếm dựa vào id
                                $data = mysqli_fetch_assoc($sqlCount); //Đưa tất cả dữ liệu select được vào mảng
                                echo "<h4>Có tất cả ".$data['total']." nhân viên</h4>";
                                ?>
                        </div>
                            
                        <!-- Bảng hiển thị danh sách nhân viên -->
                        <table class="table table-hover table-bordered" name="employeeTable">
                            <thead>
                            <tr>
                                <th>Mã</th>
                                <th class="text-left">Tên nhân viên</th>
                                <th>Tài khoản</th>
                                <th>Số điện thoại</th>
                                <th>Số CMND</th>
                                <th>Địa chỉ</th>
                                <th>Công việc</th>
                                <th>Năm vào</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
        <?php 
            $select_emp = "SELECT * FROM employees";
            $result_emp = mysqli_query($conn, $select_emp);
            if ($result_emp->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result_emp)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <th class="text-left"><?php echo $row['fullname']; ?></th>
            <td><?php echo $row['account']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['id_num']; ?></td>
            <td class="text-left"><?php echo $row['address']; ?></td>
            <td><?php echo $row['job']; ?></td>
            <td><?php echo $row['start']; ?></td>
            <td>
                <?php 
                if ($row['user_group']=="admin") {
                    echo "<i class='material-icons' style='color: green;'>verified_user</i>";
                }else{
                ?>
                <form method="get" action="delete_emp.php">
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>"><i class="material-icons">edit</i></button>
                    <button type="submit" class="btn btn-sm btn-danger" name="delete" value="<?php echo $row['id']; ?>" onclick="return del()"><i class="material-icons">delete</i></button>
                </form>
                <?php
                }
                ?>
            </td>
        </tr>
        
        <script type="text/javascript">
            function del(){
            var del = confirm("Bạn có thực sự muốn xóa nhân viên này?");
            if (del) {
                return true
            }else{
                return false
            }
            return false
            }
        </script>

        <!-- modal sua thong tin nhan vien -->
        <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="get" action="update_emp.php">
                        <div class="modal-header">
                            <h3 class="modal-title" id="editModal"><?php echo $row['fullname']; ?></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-left">
                            <div class="form-group">
                                <label for="ephone">Số điện thoại</label>
                                <input type="text" name="ephone" id="ephone" pattern="\d{10,10}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="eaddress">Địa chỉ</label>
                                <input type="text" name="eaddress" id="eaddress" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ejob">Công việc</label>
                                <select class="form-control" data-style="btn btn-link" id="ejob" name="ejob">
                                    <option disabled selected value="">Công việc*</option>
                                    <option value="Phục vụ">Phục vụ</option>
                                    <option value="Chế biến">Chế biến</option>
                                    <option value="Order">Order</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="update" value="<?php echo $row['id']; ?>" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
        }
        }
    ?>
    </tbody>
                            </table>
                          </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="shift">
                      <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Lịch trực</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Ca trực</li>
                        </ol>
                      </nav>
                      <hr>
                      <p class="text-left"><strong>Chú thích: </strong><strong style="color: red;">Nhân viên chế biến</strong> /
                      <strong style="color: green;">Nhân viên order</strong> / 
                      <strong style="color: blue;">Nhân viên phục vụ</strong></p>
                    </div>
                    <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Thứ 2</th>
            <th scope="col">Thứ 3</th>
            <th scope="col">Thứ 4</th>
            <th scope="col">Thứ 5</th>
            <th scope="col">Thứ 6</th>
            <th scope="col">Thứ 7</th>
            <th scope="col">Chủ nhật</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $select_ca = "SELECT DISTINCT shiftName FROM shifts";
            $query_ca = mysqli_query($conn, $select_ca);
            if ($query_ca->num_rows > 0) {
              while ($row=mysqli_fetch_assoc($query_ca)) {
              ?>
              <tr>
                <th>Ca <?php echo $row['shiftName']; ?></th>
                <?php 
                  for ($i=2; $i < 9 ; $i++) { 
                ?>
                <td>
                  <?php 
                    $select_ngay = "SELECT shifts.dayOfShift, employees.fullname, employees.job FROM shifts INNER JOIN employees ON shifts.empAccount=employees.account WHERE shiftName = '".$row['shiftName']."'";
                    $query_ngay = mysqli_query($conn, $select_ngay);
                    if ($query_ngay->num_rows > 0) {
                      while ($rows = mysqli_fetch_assoc($query_ngay)) {
                        if ($rows['dayOfShift']==$i)
                          switch ($rows['job']) {
                            case 'Chế biến':
                              echo '<p style="color: red;">'.$rows['fullname'].'</p>';
                              break;
                            case 'Order':
                              echo '<p style="color: green;">'.$rows['fullname'].'</p>';
                              break;
                            default:
                              echo '<p style="color: blue;">'.$rows['fullname'].'</p>';
                              break;
                          }
                        else
                          echo "";
                      }
                    }
                  ?>
                </td>
                <?php
                  }
                 ?>
              </tr>
              <?php
              }
            }
           ?>
        </tbody>
    </table> 
                    </div>
                    <div class="tab-pane" id="salary">
                      <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Lương</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Lương nhân viên</li>
                        </ol>
                      </nav>
                      <hr>
                      <?php
                        include '../lib/sql_conn.php';
                        error_reporting(E_PARSE);

                        $select = "SELECT * FROM employees";
                        $select_query = mysqli_query($conn, $select);
                        $account = array(); 
                        if ($select_query->num_rows > 0) {
                          while ($row = mysqli_fetch_assoc($select_query)) {
                            array_push($account, $row['account']);
                          }
                        }
                        echo '<table class="table table-hover table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col">Họ tên</th>
                                  <th scope="col">Số ca trực/Tháng</th>
                                  <th scope="col">Tổng tiền lương</th>
                                </tr>
                              </thead>
                              <tbody>';
                        foreach ($account as $key) {
                          $create = "CREATE VIEW ".$key." AS
                              SELECT empAccount as Account, COUNT(shiftName) as sumOfShifts, COUNT(shiftName)*salaryOfShift as sumOfSalary
                              FROM shifts
                              WHERE empAccount='".$key."'";
                          $create_query = mysqli_query($conn, $create);

                          $sel = "SELECT a.*, b.fullname as fullname, b.id as ID 
                              FROM ".$key." as a, employees as b 
                              WHERE sumOfShifts > 0 
                                AND a.Account = b.account";
                          $sel_query = mysqli_query($conn, $sel);
                          if ($sel_query->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($sel_query)) {
                              echo '<tr>
                                  <th>'.$row['ID'].'</th>
                                  <td>'.$row['fullname'].'</td>
                                  <td class="text-right">'.$row['sumOfShifts'].'</td>
                                  <td class="text-right">'.number_format($row['sumOfSalary'], 0).' VNĐ</td>
                                  </tr>';
                            }
                          } 
                          $dropView = "DROP VIEW ".$key."";
                          $dropView_query = mysqli_query($conn, $dropView);
                        }
                        echo  '</tbody>
                            </table>';
                      ?>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
    </main>

    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
        <!-- End Toggle Button -->
            </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>