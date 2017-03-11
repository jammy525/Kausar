<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <title>:: Ocean life science corpotation :: </title>

    <?php
        if (isset($style_script)) {
            echo $style_script;
        }
        ?>
</head>

<body class="header01">
    
    
    <?php
        if (isset($header)) {
            echo $header;
        }
        ?>
        
        
        <div class="site-content">
            <div class="big-title">
                <div class="container">
                    <h1 class="entry-title">Order-now</h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current">Order Now</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            &nbsp;
                         
                           
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div style="padding: 15px; border: solid #CCC 1px;">
                                <form>

                                    <div class="form-group">
                                        <label for="Name">Name </label>
                                        <input type="Name" class="form-control" id="Name" aria-describedby="Name" placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label for="Phone">Phone </label>
                                        <input type="Phone" class="form-control" id="Phone" aria-describedby="Phone" placeholder="Phone">
                                    </div>


                                    <div class="form-group">
                                        <label for="Product quantity">Product quantity</label>
                                        <input type="Product quantity" class="form-control" id="Phone" aria-describedby="Product quantity" placeholder="Product quantity">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea">Message</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                    </div>



                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit" style="width: 35%; margin-top: 30px; margin-left: 35%;" />

                                </form>
                            </div>


                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3">
                            &nbsp;
                         
                           
                        </div>







                    </div>
                </div>
            </div>

        </div>
        
<?php 
        if (isset($footer)) {
            echo $footer;
        }
        ?>
    </div>
    <a class="scrollup"><i class="fa fa-angle-up"></i></a>

    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;ver=4.5'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/snap.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery.prettyPhoto.init.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jQuery.headroom.minaac9.js?ver=1.1.12'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/headroom.minaac9.js?ver=1.1.12'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/script.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/gmap3.min.js'></script>
</body>

</html>
