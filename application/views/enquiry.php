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
							<?php
                //for validation error
                if (validation_errors()) {
                    ?>
                    <div style="margin-top: 30px;" class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo validation_errors() ?>
                    </div>
                <?php }
                ?>
                <?php if ($this->session->flashdata('enquirySucc')) { ?>
                    <div style="margin-top: 30px;" class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('enquirySucc') ?>
                    </div>


                <?php } else if ($this->session->flashdata('enquiryFailed')) { ?>

                    <div style="margin-top: 30px;" class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('enquiryFailed') ?>
                    </div>



                <?php }
                ?>
                            <form class="wpcf7-form" method="post" action="<?php base_url();?>enquiryprocess">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="wpcf7-form-control-wrap your-name">
                                            <input type="text" name="name" value="<?php set_value('name');?>" class="wpcf7-form-control" placeholder="Your name (required)" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="wpcf7-form-control-wrap your-phone">
                                            <input type="tel" name="phone" value="<?php set_value('phone');?>" class="wpcf7-form-control" placeholder="Your phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="email" value="<?php set_value('email');?>" class="wpcf7-form-control" placeholder="Your e-mail (required)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wpcf7-form-control-wrap your-message">
                                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control" placeholder="Your message (required)"><?php set_value('message');?></textarea>
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
