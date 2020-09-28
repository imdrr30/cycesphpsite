<?php
$htitle="dashboard";
$descrp="dashboard";
require "defaults/header.php";?>
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
.col-lg-3 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
</style>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
        $result = mysqli_query($con,"SELECT * FROM events WHERE clocal='".$_SESSION['content']."'");
        $rowcount=0;

        while($row = mysqli_fetch_array($result)){
            if($rowcount%2==0){
                echo '<div class="row">';
            }
            echo '
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info" style=\'background-image: url("'.$row['bannerimg'].'");\'>
              <div class="inner">
                <h3>'.$row['title'].'</h3>

                <p style="font-size:20px">'.$row['date'].'</p>
                <p>'.$row['indus'].'</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="'.$row['reglink'].'" class="small-box-footer">'.$row['payment'].' <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>';
          if($rowcount%2!=0){
            echo '</div>';
        }
        $rowcount+=1;
        }
        ?>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require "defaults/footer.php";?>