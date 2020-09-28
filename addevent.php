<?php

$htitle="add_event";
$descrp="add_event";
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
    $error= $stringfetch['event_failed'];
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    $error= $stringfetch['event_failed'];
  } else {
    if (!move_uploaded_file($_FILES["bannerimg"]["tmp_name"], $target_file)) {
      $error= $stringfetch['event_failed'];
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
            <h1 class="m-0 text-dark"><?php echo $stringfetch[$descrp];?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo $stringfetch['home'];?></a></li>
              <li class="breadcrumb-item active"><?php echo $stringfetch[$htitle];?></li>
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
                <h3 class="card-title">'.$stringfetch['event_success'].'</h3>
              </div>
            </div>
      </div>';
    }}
    ?>
    <div class="col-md-6" class="max-width: 100%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $stringfetch['event_details'];?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" role="form" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label><?php echo $stringfetch['title_text'];?> </label>
                    <input type="text" name="title" class="form-control" placeholder="<?php echo $stringfetch['enter_title'];?>">
                  </div>
                  <div class="form-group">
                    <label ><?php echo $stringfetch['sdescript'];?></label>
                    <textarea name="sdescrp" class="form-control" placeholder="<?php echo $stringfetch['enter_sdescript'];?>"></textarea>
                  </div>
                  <div class="row">
                  <div class="col-6">
                    <label ><?php echo $stringfetch['location'];?></label>
                    <input type="text" name="location" class="form-control" placeholder="<?php echo $stringfetch['enter_location'];?>">
                  </div>
                  <div class="col-6">
                    <label ><?php echo $stringfetch['date'];?></label>
                    <input type="date" name="date" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-6">
                    <label ><?php echo $stringfetch['industry'];?></label>
                    <input type="text" name="indus" class="form-control" placeholder="<?php echo $stringfetch['enter_industry'];?>">
                  </div>
                  <div class="col-6">
                    <label ><?php echo $stringfetch['sector'];?></label>
                    <input type="text" name="sect" class="form-control" placeholder="<?php echo $stringfetch['enter_sector'];?>">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-6">
                    <label><?php echo $stringfetch['phone_num'];?></label>
                    <input type="text" name="mobilenum" class="form-control" placeholder="<?php echo $stringfetch['enter_mobile'];?>">
                  </div>
                  <div class="col-6">
                    <label for="exampleInputFile"><?php echo $stringfetch['banner_event'];?></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="bannerimg" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"><?php echo $stringfetch['choosefile'];?></label>
                      </div>
                  
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group" style="margin-left: 10px;margin-right: 363px;">
                  <label><?php echo $stringfetch['event_payment'];?></label>
                  <div class="row">
                        <div class="form-check" style="margin-right: 20px;margin-left: 10px;">
                          <input class="form-check-input" type="radio" value="Free" name="payment" checked="">
                          <label class="form-check-label"><?php echo $stringfetch['free'];?></label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="Paid" name="payment">
                          <label class="form-check-label"><?php echo $stringfetch['paid'];?></label>
                        </div>
                        </div>
                      </div>
                  <div class="col-6">
                    <label ><?php echo $stringfetch['reglink'];?></label>
                    <input type="text" name="reglink" class="form-control" placeholder="<?php echo $stringfetch['link_to_form'];?>">
                  </div>
                  </div>
                  <div class="form-group">
                    <label ><?php echo $stringfetch['bdescript'];?></label>
                    <textarea name="bdescrp" class="form-control" placeholder="<?php echo $stringfetch['enter_bdescript'];?>"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right" value="Submit" name="addevent"><?php echo $stringfetch['submit'];?></button>
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