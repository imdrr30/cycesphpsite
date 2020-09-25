<?php 
$htitle="Events";
$descrp="All Events";
require_once "defaults/eventheader.php";
?>

<style>
.col-lg-3 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
</style>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
<div class="btn-group">
  <select name="ind" class="btn btn-primary dropdown-toggle" style="margin-left: 20px;margin-bottom: 15px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
  <div class="dropdown-menu">
    <option class="dropdown-item" value="<?php
    if(isset($_GET['ind']) && $_GET['ind']!=''){
      echo $_GET['ind'].'" selected="selected';
    }
    ?>">Industry</option>
    
    <option class="dropdown-item" value="Engineering">Engineering</option>
    <option class="dropdown-item" value="Music">Music</option>
    <option class="dropdown-item" value="Education">Education</option>
  </div>
  </select>



  <select name="sec" class="btn btn-primary dropdown-toggle" style="margin-left: 10px;margin-bottom: 15px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
  <div class="dropdown-menu">
    <option class="dropdown-item" value="<?php
    if(isset($_GET['sec']) && $_GET['sec']!=''){
      echo $_GET['sec'].'" selected="selected';
    }
    ?>">Sector</option>
    <option class="dropdown-item" value="English">English</option>
    <option class="dropdown-item" value="Tamil">Tamil</option>
    <option class="dropdown-item" value="Computer Science">Computer</option>
  </div>
  </select>

  <select name="loc" class="btn btn-primary dropdown-toggle" style="margin-left: 10px;margin-bottom: 15px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
  <div class="dropdown-menu">
    <option class="dropdown-item" value="<?php
    if(isset($_GET['loc']) && $_GET['loc']!=''){
      echo $_GET['loc'].'" selected="selected';
    }
    ?>">Location</option>
    <option class="dropdown-item" value="Chennai">Chennai</option>
    <option class="dropdown-item" value="Madurai">Madurai</option>
    <option class="dropdown-item" value="Coimbatore">Coimbatore</option>
    <option class="dropdown-item" value="Mumbai">Mumbai</option>
  </div>
  </select>

  <select name="date" class="btn btn-primary dropdown-toggle" style="margin-left: 10px;margin-bottom: 15px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
  <div class="dropdown-menu">
    <option class="dropdown-item" value="<?php
    if(isset($_GET['date']) && $_GET['date']!=''){
      echo $_GET['date'].'" selected="selected';
    }
    ?>">Date</option>
    <option class="dropdown-item" value="today">Today</option>
    <option class="dropdown-item" value="tomorrow">Tomorrow</option>
    <option class="dropdown-item" value="week">Within a Week</option>
    <option class="dropdown-item" value="month">Within a Month</option>
  </div>
  </select>
  <select name="pay" class="btn btn-primary dropdown-toggle" style="margin-left: 10px;margin-bottom: 15px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
  <div class="dropdown-menu">
    <option class="dropdown-item" value="<?php
    if(isset($_GET['pay']) && $_GET['pay']!=''){
      echo $_GET['pay'].'" selected="selected';
    }
    ?>">Free or Paid</option>
    <option class="dropdown-item" value="free">Free</option>
    <option class="dropdown-item" value="paid">Paid</option>
  </div>
  </select>
  <button class="btn btn-secondary" style="margin-left: 10px;margin-bottom: 15px;">Apply Filter</button>
</div>
</form>
        <?php
        $count=1;
        $max=5;
        if(isset($_GET['page'])){
          $max*=$_GET['page'];
        }
        while($row = mysqli_fetch_array($result)){
          if($count>=$max-4 && $count<=$max){
            echo '
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info"  style=\'background-image: url("'.$row['bannerimg'].'");\'>
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
          }
          $count++;
        }
        ?>
        
        <!-- /.row -->
        <!-- Main row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php require "defaults/footer.php";?>