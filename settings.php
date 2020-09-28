<?php 
$htitle="settings";
$descrp="settings";

require_once "defaults/header.php"; 
$querylang = mysqli_query($con,"SELECT * FROM events");
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
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" role="form" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label><?php echo $stringfetch['language'];?>:  </label>
                    <select name="lang">
                    <?php 
                    $querylang = mysqli_query($con,"SELECT lang,langfull FROM strings");
                    while($rowlang = mysqli_fetch_array($querylang)){
                    if($_SESSION['lang']==$rowlang['lang']){
                        echo '<option value="'.$rowlang["lang"].'" selected="selected">'.$rowlang["langfull"].'</option>';
                    }
                    else{
                        echo '<option value="'.$rowlang["lang"].'">'.$rowlang["langfull"].'</option>';
                    }
                }
                  ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label><?php echo $stringfetch['content'];?>:  </label>
                    <select name="content">
                    <?php 
                    $querylang = mysqli_query($con,"SELECT lang,langfull FROM strings");
                    while($rowlang = mysqli_fetch_array($querylang)){
                    if($_SESSION['content']==$rowlang['lang']){
                        echo '<option value="'.$rowlang["lang"].'" selected="selected">'.$rowlang["langfull"].'</option>';
                    }
                    else{
                        echo '<option value="'.$rowlang["lang"].'">'.$rowlang["langfull"].'</option>';
                    }
                }
                  ?>
                    </select>
                  </div>
                  
                  <button type="submit" class="btn btn-primary float-right" value="Submit" name="settings"><?php echo $stringfetch['submit'];?></button>
                
                </form
             
<?require_once "defaults/footer.php";?>