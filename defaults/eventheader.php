<?php
require_once "defaults/header.php"; 
$where=0;
$query="SELECT * FROM events ";
if(isset($_GET['q']) && $_GET['q']!=''){
  $key1 = mysqli_real_escape_string($con, $_GET['q']);
  if($where==0){$query.="WHERE ";$where=1;}else{$query.="AND ";}
  $query.="`title` LIKE '%".$key1."%' ";
}
if(isset($_GET['ind']) && $_GET['ind']!=''){
  $key2 = mysqli_real_escape_string($con, $_GET['ind']);
  if($where==0){$query.="WHERE ";$where=1;}else{$query.="AND ";}
  $query.="`indus` LIKE '%".$key2."%' ";
}
if(isset($_GET['sec']) && $_GET['sec']!=''){
  $key3 = mysqli_real_escape_string($con, $_GET['sec']);
  if($where==0){$query.="WHERE ";$where=1;}else{$query.="AND ";}
  $query.="`sect` LIKE '%".$key3."%' ";
}
if(isset($_GET['date']) && $_GET['date']!=''){
  $key4 = mysqli_real_escape_string($con, $_GET['date']);
  if($where==0){$query.="WHERE ";$where=1;}else{$query.="AND ";}
  $query.="`date` LIKE '%".$key4."%' ";
}
if(isset($_GET['loc']) && $_GET['loc']!=''){
  $key5 = mysqli_real_escape_string($con, $_GET['loc']);
  if($where==0){$query.="WHERE ";$where=1;}else{$query.="AND ";}
  $query.="`location` LIKE '%".$key5."%' ";
}
if(isset($_GET['pay']) && $_GET['pay']!=''){
  $key6 = mysqli_real_escape_string($con, $_GET['pay']);
  if($where==0){$query.="WHERE ";$where=1;}else{$query.="AND ";}
  $query.="`payment` LIKE '%".$key6."%' ";
}
$query.="ORDER BY id DESC;";
?>
  <?php if($htitle=="events") {
     $result = mysqli_query($con,$query);
     $rowcount=mysqli_num_rows($result);
     if($rowcount%5!=0){
       $rowcount+=5;
     }
     $rowcount/=5;
     $rowcount= (int)$rowcount; 
    echo '
  <nav aria-label="Page navigation example" class="float-right" style="margin-top: 10px;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>';
   
    for($i=1;$i<=$rowcount;$i++){
      echo '<li class="page-item"><input type="submit" name="page" class="page-link" value="'.$i.'"></li>';
    }
    echo
    '
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>';} ?>
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
              <li class="breadcrumb-item active"><?php echo $stringfetch[$descrp];?></li>
            </ol>
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>