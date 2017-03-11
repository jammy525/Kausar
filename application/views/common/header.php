<div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loader">Loading...</div>
            </div>
        </div>
    </div>
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">
            <div class="mobile-menu">
                <ul class="menu">
                    <li>
                        <a href="<?=base_url()?>home">Home</a>

                    </li>
                    <li>
                        <a href="<?=base_url()?>about">About Us</a>

                    </li>
                    <li>
                        <a href="#">Our Product</a>
                        <ul class="sub-menu">
						<?php foreach($mainCategories as $mainCategory){?>
						
						<li><a href="<?php echo base_url() . "products/" . $mainCategory['slug']; ?>"><?=$mainCategory['name'];?></a></li>
						<?php }?>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url()?>gallery">Products Gallery</a>

                    </li>
                    <li>
                        <a href="<?=base_url()?>certification">Certification</a>

                    </li>
                    <li>
                        <a href="<?=base_url()?>enquiry">Enquiry</a>

                    </li>
                    <li>
                        <a href="<?=base_url()?>contact">Contact</a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="snap-drawer snap-drawer-right"></div>
    </div>
    <div id="page" class="site">
        <div class="top-area site-top hidden-xs hidden-sm">
            <div class="container">
                <div class="row middle">
                    <div class="col-md-6">
                        <i class="fa fa-envelope"></i>&nbsp; <a href="#">info@olsc.us </a>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top-menu">
                            <ul id="top-menu" class="menu">
                                <li class="menu-item"><i class="fa fa-phone"></i>
                                    &nbsp; 011-25634070, +91-9999136670</li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<header class="site-header">
<!-- #site-navigation -->
<nav id="site-navigation" class="main-navigation">
                <div class="top-search">
                    <div class="container">
                        <div class="row middle">
                            <div class="col-md-12">
                                <form>
                                    <input type="search" name="s" placeholder="What are you looking for?" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="container">
                        <div class="row middle">
                            <div class="col-md-2 col-xs-8 site-branding">
                                <a href="index.html">
                                    <img src="<?=base_url()?>public/images/logo.png" alt="Logo" />
                                </a>
                            </div>
                            <div class="col-xs-2 hidden-md hidden-lg">
                                <i class="fa fa-search search-btn"></i>
                            </div>
                            <div class="col-xs-2 hidden-md hidden-lg end">
                                <i id="open-left" class="fa fa-navicon"></i>
                            </div>
                            <div class="col-md-10 hidden-xs hidden-sm nav-left">
                                <div class="primary-menu">
                                    <ul class="menu">
                                        <li>
                                            <a href="<?=base_url()?>home">Home</a>

                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>about">About Us</a>

                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0)">Our Product</a>
                                            <ul class="sub-menu">
											<?php foreach($mainCategories as $mainCategory){?>
                                                <li><a href="<?php echo base_url() . "products/" . $mainCategory['slug']; ?>"><?=$mainCategory['name'];?></a></li>
                                            <?php }?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>gallery">Products Gallery</a>

                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>certification">Certification</a>

                                        </li>

                                        <li>
                                            <a href="<?=base_url()?>enquiry">Enquiry</a>

                                        </li>

                                        <li>
                                            <a href="<?=base_url()?>contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
			
			
</header>