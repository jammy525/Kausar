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
                    <h1 class="entry-title">Contact</h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="mb-2">

                                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB2VIYyBg6-1HDpSZvgG3Pvcc2V4svYsd0'></script>
                                <div style='overflow: hidden; height: 400px; width: 100%;'>
                                    <div id='gmap_canvas' style='height: 400px; width: 100%;'></div>
                                    <style>
                                        #gmap_canvas img {
                                            max-width: none!important;
                                            background: none!important;
                                        }
                                    </style>
                                </div>
                                <a href='https://embedmaps.net'>add google map to your website</a>
                                <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=0e4af14925cc0a5bd87fd6954fbd6aa990730381'></script>
                                <script type='text/javascript'>function init_map() { var myOptions = { zoom: 12, center: new google.maps.LatLng(28.6179102, 77.08497290000003), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(28.6179102, 77.08497290000003) }); infowindow = new google.maps.InfoWindow({ content: '<strong> Ocean life science corpotation</strong><br>A3/28A, Chanakya Place, Part-1, Opp. C-2, Janakpuri, Pankha Road <br> New Delhi - 110059<br>' }); google.maps.event.addListener(marker, 'click', function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <h2>Ocean life science corpotation 
                                </h2>
                            </div>
                            <div class="contact-info">
                                <p><strong>Delhi Branch Address</strong></p>
                                <p>
                                    <i class="fa fa-map-marker"></i>A3/28A, Chanakya Place, Part-1, Opp. C-2, 
                                    <span style="margin-left: 7%;">Janakpuri, Pankha Road, New Delhi - 110059</span>
                                </p>
                                <p><i class="fa fa-phone"></i>09999136670, 011-25639001</p>
                                <p><i class="fa fa-envelope"></i>info@olsc.us, olsc.lab@gmail.com</p>

                                <p><strong>Corporate Address</strong></p>

                                <p>
                                    <i class="fa fa-map-marker"></i>Compound of Nawab Khan Jama Masjid Road 
                                    <span style="margin-left: 7%;">Tundla, District Firozabad, UP-283204 </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
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
                            <form class="wpcf7-form" method="post" action="<?php base_url();?>contactprocess">
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

    <script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyBRfARVIzkowtqo3RJ_gMCM-JG97J51Www&sensor=false&amp;language=en&amp;ver=4.5'></script>
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
