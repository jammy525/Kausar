<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?>- OLS</title>
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
                                <form data-toggle="validator" role="form" action="<?php echo base_url(); ?>admin/about/addAbout" method="post" id="add-package" enctype='multipart/form-data'>
                                    <div class="box-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="groupName">Menu Name</label>
                                                <input type="text" class="form-control" id="menuName" name="menuName" maxlength="23" value="<?php echo $about['menuName']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="groupName">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" maxlength="23" value="<?php echo $about['title']; ?>" required="true">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <br>
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" id="package"><?php echo $about['description']; ?></textarea>
                                        </div>
                                        <!--<div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value='yes' name='excludetoabout'> Exclude From About and add to top
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value='yes' name="addtofotter"> add to footer
                                                </label>
                                            </div>
                                        </div>-->

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
                //bootstrap WYSIHTML5 - text editor
                //$(".textarea").wysihtml5();
            });

        </script>
    </body>
</html>
