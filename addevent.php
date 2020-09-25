<?php
require_once "configurator.php";
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
if ($_SESSION['role']!='ADMIN'){
  header('Location: home.php');
}
$fetch_data = "SELECT * FROM usertable WHERE email = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);

if(isset($_POST['addevent'])){
  $title = mysqli_real_escape_string($con, $_POST['title']);
  $sdescrp = mysqli_real_escape_string($con, $_POST['sdescrp']);
  $location = mysqli_real_escape_string($con, $_POST['location']);
  $date = mysqli_real_escape_string($con, $_POST['date']);
  $mobilenum = mysqli_real_escape_string($con, $_POST['mobilenum']);
  $bdescrp = mysqli_real_escape_string($con, $_POST['bdescrp']);
  $payment = mysqli_real_escape_string($con, $_POST['payment']);
  $reglink = mysqli_real_escape_string($con, $_POST['reglink']);
  $indus = mysqli_real_escape_string($con, $_POST['indus']);
  $sect = mysqli_real_escape_string($con, $_POST['sect']);
  $target_dir = "assets/images/";
  $target_file = $target_dir . basename($_FILES["bannerimg"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $error='';
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    $error= "Sorry, your file was not uploaded.";
  } else {
    if (!move_uploaded_file($_FILES["bannerimg"]["tmp_name"], $target_file)) {
      $error= "Sorry, there was an error uploading your file.";
    }
  }
  $insert_data = "INSERT INTO `events` ( `title`, `shortdes`, `location`, `mobilenum`, `date`, `bannerimg`, `payment`, `reglink`, `indus`, `sect`, `briefdes`) VALUES ('$title', '$sdescrp', '$location', '$mobilenum', '$date', '$target_file', '$payment', '$reglink', '$indus', '$sect', '$bdescrp')";
  $data_check = mysqli_query($con, $insert_data);
}

?>
<html style="height: auto;"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Event</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body class="sidebar-mini layout-fixed" style="height: auto;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-logout"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cyces</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-scrollbar-vertical-hidden"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 322px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style=""><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $fetch_info['email'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link" href="dashboard.php">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview menu-open">
            
            <a class="nav-link" href="events.php">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Events
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link active" href="addevent.php">
              <i class="nav-icon fas fa-edit"></i>
              <p>Add Event
              </p>
            </a>
            
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 323px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Event</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Event</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<style>
  .col-md-6{
    max-width: 100%;
  }
  </style>
    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($error)){
      if ($error!=''){
        echo '
    <div class="col-md-6" class="max-width: 100%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #f00;">
                <h3 class="card-title">'.$error.'</h3>
              </div>
            </div>
      </div>';
    }else{
      echo '
    <div class="col-md-6" class="max-width: 100%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #1fb529;">
                <h3 class="card-title">Event Added Successfully!!</h3>
              </div>
            </div>
      </div>';
    }}
    ?>
    <div class="col-md-6" class="max-width: 100%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Event Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" role="form" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label >Short Description</label>
                    <textarea name="sdescrp" class="form-control" placeholder="Write Description"></textarea>
                  </div>
                  <div class="row">
                  <div class="col-6">
                    <label >Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Enter Location">
                  </div>
                  <div class="col-6">
                    <label >Date</label>
                    <input type="date" name="date" class="form-control" placeholder="Enter Date">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-6">
                    <label >Industries</label>
                    <input type="text" name="indus" class="form-control" placeholder="Enter Industry">
                  </div>
                  <div class="col-6">
                    <label >Sector</label>
                    <input type="text" name="sect" class="form-control" placeholder="Enter Sector">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-6">
                    <label>Mobile Number</label>
                    <input type="text" name="mobilenum" class="form-control" placeholder="Enter Mobile Number">
                  </div>
                  <div class="col-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="bannerimg" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group" style="margin-left: 10px;margin-right: 363px;">
                  <label>Event Payment</label>
                  <div class="row">
                        <div class="form-check" style="margin-right: 20px;margin-left: 10px;">
                          <input class="form-check-input" type="radio" value="Free" name="payment" checked="">
                          <label class="form-check-label">Free</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="Paid" name="payment">
                          <label class="form-check-label">Paid</label>
                        </div>
                        </div>
                      </div>
                  <div class="col-6">
                    <label >Registration Link</label>
                    <input type="text" name="reglink" class="form-control" placeholder="Link to Form">
                  </div>
                  </div>
                  <div class="form-group">
                    <label >Brief</label>
                    <textarea name="bdescrp" class="form-control" placeholder="Brief Description"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary float-right" value="Submit" name="addevent">
                </div>
              </form>
            </div>
            <!-- /.card -->

           
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>