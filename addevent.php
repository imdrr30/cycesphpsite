<?php

$htitle="Add Event";
$descrp="Add New";
require "defaults/header.php";

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

</nav>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 323px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $descrp;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $htitle;?></li>
            </ol>
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>
</form>
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
  
<?php require "defaults/footer.php";?>