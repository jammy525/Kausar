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
    
    
    <div id="page" class="site">
        
        <?php
        if (isset($header)) {
            echo $header;
        }
        ?>
        <div class="site-content">
            <div class="big-title">
                <div class="container">
                    <h1 class="entry-title"><?= $productDetail['name']; ?></h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current"><?= $productDetail['name']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="section home_news pt-5 pb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <div class="section-title">Our Product</div>
                                    <div class="section-desc">
									<?php foreach ($allCategory as $aK => $aV) { ?>
										<?php if ($aV['subCategory'] == 0) { ?>
                                        <p class="itemssm"><a href="<?php echo base_url() . 'products/' . $aV['slug']; ?>"><?= $aV['name']; ?></a></p>
										<?php
										foreach ($allProducts as $sK => $sV) {
                                            if ($currentMainCat['id'] == $aV['id']) {
                                                if ($aV['id'] == $sV['mainCatID']) {
                                                    ?>
                                        <p <?php echo isset($productDetail['id']) && $productDetail['id'] == $sV['id'] ? 'class=itemssubactive' : 'class=itemssubss'; ?>><a  href="<?php echo base_url() . 'product-detail/' . $sV['slug']; ?>">- <?= $sV['name']; ?></a></p>
                                        <?php
                                                }
                                            }
                                        }
                                         } 



                             } ?>
                                    </div>


                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div style="width: 55%; float: left; margin-right: 5%;">
                                    <div class="news-entry-media">
                                        <img src="<?php echo base_url() . "control/upload/product/" . $productDetail['image']; ?>" alt="" />
                                        <div class="news-entry-cover">
                                            <div class="news-overlay home-blog-container"></div>
                                            <div class="home-blog-popup">
                                                <a data-rel="prettyPhoto" href="<?php echo base_url() . "control/upload/product/" . $productDetail['image']; ?>">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 40%; float: left;">
                                    <p class="itemss" style="margin-bottom: 20px; font-weight: 500;"><?php echo $productDetail['name']; ?></p>
                                    <p><?php echo $productDetail['description']; ?></p>

                                    <p style="padding: 10px 0 5px 0px; font-weight: 500;"><span class="itemss">CE:</span> <?php echo $productDetail['name']; ?> </p>
                                    <p style="padding: 5px 0 5px 0px; font-weight: 500;"><span class="itemss">Categories:</span> <?php echo $currentMainCat['name']; ?> </p>

                                    <p style="border-bottom: solid #CCC 1px; border-top: solid #CCC 1px; padding: 10px;">
                                        <i class="fa fa-rupee"></i><?php echo $productDetail['price']; ?>
                                    </p>

                                    <div class="home_quote_btn text-left" style="margin-top: 20px;">
                                        <a href="<?php echo base_url() . "order/" . $productDetail['slug']; ?>">Order Now</a>
                                    </div>
                                </div>

                                <div style="width: 100%; float: left; margin-top: 20px;">

                                    <p class="itemsss">Specification </p>
                                    <p>
                                        <?php echo $productDetail['specification']; ?>
                                        
 
                                    </p>



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
</body>

</html>
