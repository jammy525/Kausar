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
                    <h1 class="entry-title"><?php echo $currentMainCats['name']; ?></h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
							<?php if (isset($curentSubCat['slug'])) { ?>
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="top"><a href="<?php echo base_url() . 'products/' . $currentMainCats['slug']; ?>"><?php echo $currentMainCats['name']; ?></a></li>
                                <li class="sub tail current"><?= $curentSubCat['name']; ?></li>
								<?php } else { ?>
								<li class="top"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="sub tail current"><?php echo $currentMainCats['name']; ?></li>
                            <?php } ?>
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
                                    <?php foreach($allCategories as $aK => $aV){?>
										<?php if ($aV['subCategory'] == 0) { ?>
									<div class="section-desc">
                                        <p class="itemssm"><a href="<?php echo base_url() . 'products/' . $aV['slug']; ?>"><?php echo $aV['name'];?></a></p>
										<?php //foreach($product as $productofmaincat){?>
										
										<?php
                                        foreach ($allProducts as $sK => $sV) {
                                            if ($currentMainCats['id'] == $aV['id']) {
                                                if ($aV['id'] == $sV['mainCatID']) {
                                                    ?>
										<p <?php echo isset($curentSubCat['id']) && $curentSubCat['id'] == $sV['id'] ? 'class=itemssubactive' : 'class=itemssubss'; ?>>
										
											<a href="<?php echo base_url() . 'product-detail/' . $sV['slug']; ?>">- <?= $sV['name']; ?></a>
										</p>
										<?php
                                                }
                                            }
                                        }
                                        ?>
										
                                    </div>

										<?php }}?>


                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="myportfolio-container minimal-light mb-3">
                                    <div class="row padding-btm">
                                        <?php
                    if ($product != NULL) {

                        foreach ($product as $k => $v) {
                            ?>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="news-entry-media">
                                                        <img src="<?php echo base_url() . "control/upload/product/" . $v['image']; ?>" alt="" />
                                                        <div class="news-entry-cover">
                                                            <div class="news-overlay home-blog-container"></div>
                                                            <div class="home-blog-popup">
                                                                <a data-rel="prettyPhoto" href="<?php echo base_url() . "control/upload/product/" . $v['image']; ?>">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home-blog-content">
                                                        <div class="home-blog-title">
                                                            <a href="<?php echo base_url() . 'product-detail/' . $v['slug'] ?>">
															<?php echo $v['name']; ?> 
                                                            </a>
                                                        </div>

                                                        <div class="home-blog-desc">
                                                            <?= substr(trim($v['description']), 0, 105); ?>...
                                                        </div>
                                                        <div class="home-blog-readmore">
                                                            <a href="<?php echo base_url() . 'product-detail/' . $v['slug'] ?>">Read More
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            <?php
                        }
                    } else {
                        ?>
                        <h1>No Product Found</h1>
                    <?php } ?>
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
</body>

</html>
