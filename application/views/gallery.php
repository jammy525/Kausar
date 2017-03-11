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
        
    
    <div id="page" class="site">
        
       
        <div class="site-content">
            <div class="big-title">
                <div class="container">
                    <h1 class="entry-title">Gallery</h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current">Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-projects">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="myportfolio-container minimal-light" id="our-projects">

                                <div class="portfolio-row">
                                    <div class="portfolioContainer portfolioContainer-full row" id="da-thumbs">
                                        <ul class="project-masonry">
                                        <?php
										//print_r($allGalleries);die;
										foreach($allGalleries as $allGallery){?>
										<?php //echo $allGallery['image'];die;?>
                                         <li class="grid-item filter-3d-design our-projects-wrapper col-md-3 col-sm-3 mb-3">
                                                <div class="project-media-cover-wrapper">
                                                    <div class="project-entry-media">
                                                        <img src="<?php echo base_url();?>assets/uploads/<?php echo $allGallery['image'];?>" alt="" />
                                                    </div>
                                                    <div class="project-entry-cover">
                                                        <div class="project-overlay our-projects-container"></div>
                                                        <div class="project-content">
                                                            <div class="our-projects-categories">
                                                            </div>
                                                            <div class="line-clear"></div>
                                                            <div class="our-projects-title">
                                                            </div>
                                                            <div class="line-clear"></div>
                                                            <div class="our-projects-popup">
                                                                <a data-rel="prettyPhoto" href="<?php echo base_url();?>assets/uploads/<?php echo $allGallery['image'];?>">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
											<?php }?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
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
<script type='text/javascript' src='<?=base_url()?>public/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/snap.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery.prettyPhoto.init.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jQuery.headroom.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/headroom.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/script.js'></script>
    <script type='text/javascript' src="<?=base_url()?>public/js/modernizr-2.8.3.min.js"></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/isotope.pkgd.min.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/imagesloaded.pkgd.js'></script>
    <script type='text/javascript' src='<?=base_url()?>public/js/jquery.hoverdir.js'></script>
</body>

</html>
