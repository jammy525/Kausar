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
                                    <form action="<?php echo base_url() . 'admin/category/add'; ?>" method="post" id="addMainCat" style="float:right">
                                        <input type="text" class="form-control" name="name" placeholder="Insert Main Category name">
                                        <button class="btn btn-success" style="float:right">Add</button>
                                    </form>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="viewGroup" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Category Name</th>
                                                <th>On Home Page </th>
                                                <th>Total Sub Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $count = 1;
                                            foreach ($allMainCategory as $key => $value) {
                                                ?>
                                                <tr id="c<?php echo $value['id']; ?>" data-block="<?php echo $value['status'] == 'active' ? 'true' : 'false' ?>">
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $value['name']; ?></td>
                                                    <td>
                                                        <select onchange="addtohome('<?php echo $value['id']; ?>', this.value)">
                                                            <option value="no" <?php echo $value['addtohome']=='no'?'selected':'';?>>No</option>
                                                            <option value="yes" <?php echo $value['addtohome']=='yes'?'selected':'';?>>Yes</option>
                                                        </select>

                                                    </td>
                                                    <td><a href="#" class="btn btn-primary btn-xs" onclick="opensubCate('<?php echo $value['id']; ?>', '<?php echo $value['name']; ?>')">View</a></td>

                                                    <td><?php
                                                        if ($value['status'] == 'active') {
                                                            echo '<span class="label label-success" id="a' . $value['id'] . '">Active</span>';
                                                        } else if ($value['status'] == 'block') {
                                                            echo '<span class="label label-danger" id="b' . $value['id'] . '">Block</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>

                                                        <?php
                                                        if ($value['status'] == 'active') {
                                                            echo '<button type="button" class="btn btn-danger btn-xs" onclick="groupStatus(' . $value["id"] . ')" id="bb' . $value['id'] . '"><i class="fa fa-lock" aria-hidden="true"></i> Block</button>';
                                                        } else if ($value['status'] == 'block') {
                                                            echo '<button type="button" class="btn btn-success btn-xs" onclick="groupStatus(' . $value["id"] . ')" id="ab' . $value['id'] . '"><i class="fa fa-unlock" aria-hidden="true"></i> Active</button>';
                                                        }
                                                        ?>

                                                    </td>
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
            <!-- Modal -->
            <div id="subcategoryBox" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="subCategorytitle">Modal Header</h4>
                        </div>
                        <div class="modal-body box">
                            <div class="overlay hidden">
                                <i class="fa fa-refresh fa-spin"></i>
                            </div>

                            <form class="form-inline" action="<?php echo base_url() . "admin/category/subCatAdd"; ?>" method="post" id="subCatAdd">
                                <div class="form-group col-md-8">
                                    <label>Sub Category Name:</label>
                                    <input type="text" class="form-control" name="name">
                                    <input type='hidden' value='' name='id' id='mainCatId'>
                                </div>

                                <button type="submit" class="btn btn-default col-md-4">Submit</button>
                            </form>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="subcatDetail">


                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>


            <!-- End Of modal -->


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
        <script>

            function addtohome(id, value) {
                $.ajax({
                    url: '<?php echo base_url(); ?>admin/category/homeAdd',
                    type: 'POST',
                    dataType: 'json',
                    data: {'id':id,'value':value},
                    success: function (resp) {
                        if (resp.status) {
                            console.log(resp);
                        }
                    },
                    error: function (xhr) {
                        messageDialog({
                            msg: ':( Server out of reach. Please try again later',
                            error: true,
                            closeBtnText: 'Close'
                        });
                        $('.overlay').addClass('hidden');


                    }
                });

            }

        </script>
    </body>
</html>
