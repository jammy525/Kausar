<footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="widget">
                            <a href="index.html" class="footer-logo">
                                <img src="<?=base_url()?>public/images/footer_logo.png" alt="Footer Logo" />
                            </a>
                            Integrity for what we build, the purpose of why we build and the people who inspire us to build. It’s what Builder is built upon, and why our homes are as far from ordinary as the people who live in them.
                        </div>
                        <div class="social">
                            <div class="social-menu">
                                <ul class="menu">
                                    <li><i class="fa fa-facebook"></i></li>
                                    <li><i class="fa fa-twitter"></i></li>
                                    <li><i class="fa fa-google-plus"></i></li>
                                    <li><i class="fa fa-linkedin"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="widget">
                            <h3 class="widget-title"><span>Navigation</span></h3>
                            <ul class="menu">
                                <li>
                                            <a href="<?=base_url()?>home">Home</a>

                                        </li>
                                <li>
                                            <a href="<?=base_url()?>about">About Us</a>

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
                    <div class="col-md-3 col-sm-3">
                        <div class="widget">
                            <h3 class="widget-title"><span>Our Products</span></h3>
                            <ul class="menu">
                                <?php foreach($mainCategories as $mainCategory){?>
									<li><a href="<?php echo base_url() . "products/" . $mainCategory['slug']; ?>"><?=$mainCategory['name'];?></a></li>
								<?php }?>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="widget">
                            <h3 class="widget-title"><span>Contact</span></h3>
                            <div class="textwidget">
                                <p style="color: #fff;">Delhi Branch Address</p>
                                <p>
                                    <i class="fa fa-map-marker"></i>&nbsp;&nbsp; A3/28A, Chanakya Place, Part-1
                                    <br>

                                    <span style="margin-left: 9%;">Opp. C-2, Janakpuri, Pankha Road</span><br>


                                    <span style="margin-left: 9%;">New Delhi - 110059 </span>
                                </p>
                                <p><i class="fa fa-phone"></i>&nbsp; 09999136670, 011-25639001</p>
                                <p><i class="fa fa-envelope"></i>&nbsp; <a href="#">info@olsc.us, olsc.lab@gmail.com </a></p>

                                <p style="color: #fff;">Corporate Address</p>

                                <p>
                                    <i class="fa fa-map-marker"></i>&nbsp;&nbsp; Compound of Nawab Khan Jama 
                                    <br>

                                    <span style="margin-left: 9%;">Masjid  Road, Tundla, District  </span>
                                    <br>


                                    <span style="margin-left: 9%;">Firozabad UP-283204</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<div class="copyright">
        <div class="container">
            <div class="row middle">
                <div class="col-md-12 end-md end-lg center">
                    © Copyrights 2016 Ocean life science corpotation. All rights reserved.
                </div>
            </div>
        </div>
    </div>
		<script type="text/javascript">
        $(window).load(function () {
            $("#flexiselDemo1").flexisel();
            $("#flexiselDemo2").flexisel({
                visibleItems: 2,
                itemsToScroll: 2,
                animationSpeed: 200,
                infinite: true,
                navigationTargetSelector: null,
                autoPlay: {
                    enable: false,
                    interval: 5000,
                    pauseOnHover: true
                },
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1,
                        itemsToScroll: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2,
                        itemsToScroll: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2,
                        itemsToScroll: 2
                    }
                }
            });
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });

            $("#flexiselDemo5").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });

            $("#flexiselDemo4").flexisel({
                infinite: false
            });

        });
    </script>