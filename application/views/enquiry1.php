<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <title>:: Ocean life science corpotation :: </title>

    <link rel='stylesheet' href='<?=base_url()?>public/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/prettyPhoto.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/owl.carousel.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?=base_url()?>public/css/preloader.css' type='text/css' media='all' />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="header01">
    
    <div id="page" class="site">
        <?php
        if (isset($header)) {
            echo $header;
        }
		?>
        
        <div class="site-content">
            <div class="big-title">
                <div class="container">
                    <h1 class="entry-title">Enquiry</h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current">Enquiry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-offset-2">
                            <div class="mb-3">
                                <h2>Send us a message</h2>
                            </div>
                            <form class="wpcf7-form" method="post" action="<?php echo base_url();?>enquiryprocess">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="wpcf7-form-control-wrap your-name">
                                            <input type="text" name="name" value="<?php echo set_value('name');?>" class="wpcf7-form-control" placeholder="Your name (required)" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="wpcf7-form-control-wrap your-phone">
                                            <input type="tel" name="phone" value="<?php echo set_value('phone');?>" class="wpcf7-form-control" placeholder="Your phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="email" value="<?php echo set_value('email');?>" class="wpcf7-form-control" placeholder="Your e-mail (required)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wpcf7-form-control-wrap your-message">
                                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control" placeholder="Your message (required)"><?php echo set_value('message');?></textarea>
                                        </div>
                                        <br />
                                        <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit" style="width: 11%; margin-top: 5px;" />
                                    </div>
                                </div>
                            </form>
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
