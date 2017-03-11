<!DOCTYPE html>
<html>
<head>
    <title>Ocean Life Science</title>
    <?php 
    if(isset($head)){
        echo $head;
    }
    ?>
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php  
if(isset($nav)){
    echo $nav;
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Active Group</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url();?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php  if(isset($footer)){
      echo $footer;
  }
?>

</div>
<!-- ./wrapper -->
<?php if(isset($footerScript)){
    echo $footerScript;
} ?>
</body>
</html>
