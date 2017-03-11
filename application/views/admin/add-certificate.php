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
                        <small>Control panel</small>
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
                                    <h3 class="box-title"><?= $title; ?></h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="msg"></div>
                                <form data-toggle="validator" role="form" action="<?php echo base_url(); ?>admin/certificate/addCertificate" method="post" id="addCertificate" enctype='multipart/form-data'>
                                    <div class="box-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="certificateName">Certificate Name</label>
                                                <input type="text" class="form-control" id="certificateName" name="certificateName" placeholder="Enter Certificate Name" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <br>
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" id="description" required></textarea>
                                        </div>
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label for="certificateImage">Certificate Image</label>
                                                <input type="file" name="certificateImage" id="certificateImage" required>

                                                <p class="help-block">Best Image Dimension should be 262 X 207 px.</p>
                                            </div>
                                        </div>
										
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <input type="checkbox" name="status" id="status" value="1" checked>
                                            </div>
                                        </div>


                                    </div>

                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
								
                            </div>
                            <!-- /.box -->


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
        <script src="<?php echo base_url(); ?>control/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script>
                                                $(function () {
                                                    // Replace the <textarea id="editor1"> with a CKEditor
                                                    // instance, using default configuration.
                                                    $('#termCondition').wysihtml5();
                                                    $('#cancelPolicy').wysihtml5();
                                                    $('#importantInfo').wysihtml5();
                                                    $('#otherFacility').wysihtml5();
                                                    $('#otherInclusive').wysihtml5();
                                                    $('#package').wysihtml5();
                                                    $('#specification').wysihtml5();
                                                    //bootstrap WYSIHTML5 - text editor
                                                    //$(".textarea").wysihtml5();
                                                });

        
		</script>
    </body>
</html>
