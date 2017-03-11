<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?> | OLS</title>
        <?php
        if (isset($head)) {
            echo $head;
        }
        ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>control/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php
            if (isset($nav)) {
                echo $nav;
            }
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?= $title ?>
                        <small>Images</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?= $title; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- ./col -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Images for <?= $title ?> package</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="msg"></div>
                                <form action="<?php echo base_url(); ?>admin/gallery/add" class="dropzone needsclick dz-clickable" id="packageImages">

                                    <div class="fallback">
                                        <input name="image" type="file"/>
                                    </div>
                                    

                                </form>
                            </div>
                            <!-- /.box -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Images Already Present for <?= $title ?></h3>
                                </div>
                                <div class="box-body">
                                    <?php
                                    if ($galleryImages != NULL) {

                                        foreach ($galleryImages as $k => $v) {
                                            ?>
                                    <div class="col-md-3">
                                        <a href="<?php echo base_url()."admin/gallery/delete/".$v['id']; ?>" style='position: absolute' class="btn btn-danger" style="float: right">Delete</a>
                                        <img style="width:100%;height:300px" src="<?php echo base_url()."assets/uploads/".$v['image']; ?>">
                                        
                                    </div>
                                            
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="alert alert-warning">
                                            <strong>OOPS!</strong> No Image found please add Image for package .
                                        </div>
<?php } ?>

                                </div>

                            </div>


                        </div>

                        <!-- ./col -->
                    </div>
                    <!-- /.row -->


                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php
            if (isset($footer)) {
                echo $footer;
            }
            ?>

        </div>
        <!-- ./wrapper -->
        <?php
        if (isset($footerScript)) {
            echo $footerScript;
        }
        ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>control/css/dropzone.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>control/js/dropzone.js"></script>
        <script>
            Dropzone.options.packageImages = {
                paramName: 'image',
                method: 'POST',
            }
        </script>
    </body>
</html>


