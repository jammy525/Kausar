<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?> | OLS</title>
        <?php
        if (isset($head)) {
            echo $head;
        }
        ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>control/plugins/select2/select2.min.css">

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
                                    <h3 class="box-title"><?= $title; ?></h3>
                                </div>
                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success" style="text-align:center">
                                            <?php echo $this->session->flashdata('msg'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="overlay hidden">
                                    <i class="fa fa-refresh fa-spin"></i>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="viewGroup" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Certificate Name</th>
                                                <th>Description</th>
                                                <th>Images</th>
												<th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $count = 1;
                                            foreach ($allCertificate as $key => $value) {
												$idddd =  $value['id'];
                                                ?>
                                                <tr id="c<?php echo $value['id']; ?>" data-block="false">
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $value['certificateName']; ?></td>
                                                    <td><?php echo $value['description']; ?></td>
                                                    <td><img width='200px' height="200px" src="<?php echo base_url()."control/upload/certificate/".$value['certificateImage']; ?>"></td>
                                                    <td class="<?php echo ($value['status']) ?  'label label-success' : 'label label-danger';  ?>"><?php echo ($value['status']) ?  'Active' : 'Deactive'  ?></td>
													<td><button type="button" class="btn btn-danger btn-xs" onclick='deleteCertificate(<?php echo $value['id']; ?>);'><i class="fa fa-ban"></i> Delete</button>
                                                        <a href="<?php echo base_url()."admin/certificate/edit/".$value['id']; ?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
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

        <!-- Select2 -->
        <script src="<?php echo base_url(); ?>control/plugins/select2/select2.full.min.js"></script>

        <!-- page script -->
        <script>
                                                            $(function () {
                                                                $(".select2").select2({
                                                                    width: '200px',
                                                                    placeholder: "Select a group",
                                                                });
                                                                $("#viewGroup").DataTable();

                                                            });
		function deleteCertificate(cId) {
    var action = 'Delete';
    console.log(action);

    confirmDialog({
        msg: 'Confirm ' + action + ' <b>' + 'Certificate name (' + $row.find('td:nth-child(2)').text() + ')</b> ?',
        yesBtnText: 'Sure! ' + action + ' It',
        yesAction: function () {
            $.post(ajex_lab + 'admin/certificate/delete',
                    {
                        method: 'status', cId: cId, action: action
                    },
                    function (json) {
                        if (json.status) {
                            $('#c' + cId).remove();
                        }

                    }, 'json'

                    )
                    .error(function () {
                        messageDialog({
                            msg: 'Something went wrong. Please try later',
                            error: true
                        })
                    });
        },
        noBtnText: 'Nope',
        dataType: 'json',
        noAction: function () {},
        type: 'danger'
    });
}
        </script>
    </body>
</html>
