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
                                <form data-toggle="validator" role="form" action="<?php echo base_url(); ?>admin/product/addProduct" method="post" id="add-package" enctype='multipart/form-data'>
                                    <div class="box-body">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="groupName">Product Name</label>
                                                <input type="text" class="form-control" id="productName" name="name" placeholder="Enter Group Name" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Price</label>
                                            <input type="text" class="form-control" name="price" placeholder="price in INR" maxlength="250">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="groupName">Select your Category</label>
                                                <select name='mainCatID' class="form-control" onchange="getSubcat(this.value)">
                                                    <option value="">Please Select your category</option>
                                                    <?php foreach ($mainCat as $key => $value) { ?>

                                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>
                                        <!--<div class="col-md-6">
                                            <label>Select Your Sub Category</label>
                                            <select name='catId' class="form-control" id="subCategory">
                                                <option>Please Select Main Category</option>
                                            </select>
                                        </div>-->
                                        <div class="col-md-12">
                                            <br>
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" id="package"></textarea>
                                        </div>
										
										<div class="col-md-12">
                                            <br>
                                            <label>Specification</label>
                                            <textarea class="form-control" name="specification" id="specification"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="groupImage">Prooduct Image</label>
                                                <input type="file" name="image" id="groupImage" required>

                                                <p class="help-block">Best Image Dimension should be 262 X 207 px.</p>
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
