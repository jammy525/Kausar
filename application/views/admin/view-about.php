
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?> | OLS</title>
        <?php
        if (isset($head)) {
            echo $head;
        }
        ?>
        <style>
            .red{
                color:red;
            }
            .green{
                color:green;
            }
        </style>

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
                        <?= $title; ?>
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
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><?= $title ?></h3>
                                   
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="viewGroup" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Menu Name</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $count = 1;
                                            foreach ($allAbout as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $value['menuName']; ?></td>
                                                    <td><?php echo $value['title']; ?></td>
                                                    <td><?php echo $value['description']; ?></td>
                                                    
                                                    <td><a href="<?php echo base_url();?>admin/about/add" type="button" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Edit</a>
                                                </tr>
                                            <?php } ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.box-body -->

                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
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
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>control/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>control/plugins/datatables/dataTables.bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>control/js/admin.js"></script>

        <!-- page script -->
        <script>
            
                                                        $(function () {
                                                            $("#viewGroup").DataTable();

                                                        });
        </script>
    </body>
</html>
