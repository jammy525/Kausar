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
    <style>
        p{
            text-align: justify;
        }
    </style>
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
                    <h1 class="entry-title">About Us</h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<div class="mb-3" style="text-transform: capitalize !important;">
                                
                            </div>-->
                            <?php echo $about['description']; ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
<!--
        <div class="section section-contact" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <h3 style="text-transform: uppercase;">Infrastructure And Facilities</h3>
                        </div>





                        <p class="text-justify">The company has built and is operating manufacturing facilities that matches the latest systems and techniques in the industry, having units in Agra and New Delhi. The Company also has an associate unit in Guangzhou PRC. Our team strictly follows the quality control standards of ISO 9001:2008 series while designing, developing, manufacturing and delivering the scientific instruments. The manufacturing unit of OCEAN is made with complete state-of-the-art equipments and technologies for producing high quality instruments. </p>


                        <p class="text-justify">We have company owned sales offices in Agra and New Delhi (India). We also have the post sales technical backup system in four places in India and are in the process of further developing them to assist the customers for post sales services.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section section-contact" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <h3 style="text-transform: uppercase;">Professional Teams</h3>
                        </div>
                        <p class="text-justify">The continuous cooperation and support of our professional team has helped us to understand and deliver state of the art scientific instruments right from basic lab equipment to most sophisticated instruments for research labs. We believe that our tremendous success belongs to our expert engineers, managers, co-workers and other significant team members who have put their best efforts in the growth of the organization. It is their dedication and commitment that makes us the most trusted scientific instruments brand among our all satisfied clients. </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section section-contact" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <h3 style="text-transform: uppercase;">Forte </h3>
                        </div>
                        <p class="text-justify">We strive hard to cater to our clients with the best product range and services while meeting international standards. Our aim is to meet the overwhelming demand of the scientific community and provide them with world class quality scientific instruments along with the best after sale support.  </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section section-contact" style="margin-top: 20px;">
            <div class="container">
                <div class="row">



                    <div class="col-sm-4">
                        <div class="mb-3">
                            <h3>Company’s Outlook </h3>
                        </div>
                        <p class="text-justify">Our commitment to quality is unflinching, our hunger for growth is deep-rooted and our capacity for details is amazing. Over the decade, we have demonstrated a rare resilience and fortitude. We are determined to improve productivity and focus continuously on innovation and up-gradation of our products and people. We are determined to serve our fraternity and achieve “complete customer satisfaction through business ethics”. Besides working very closely with our customers in research and development fields and providing end to end customized solutions we also providing high quality standard equipments from our comprehensive product range. </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <h3>Quality Standards </h3>
                        </div>
                        <p class="text-justify">At OCEAN group, we design and develop the a complete range of scientific and laboratory instruments with the highest quality standards. We constantly update technologies and methodologies to ensure reliability and consistency at each level of instruments production. Our transparent auditing system is supported by Duns & Bradstreet International, as we want to deliver the world class quality instruments to all our national and international clients. We feel proud that our entire product range has brought satisfactory results for the corporate and public sector clients.</p>

                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <h3 style="text-transform: uppercase;">Quality Standards </h3>
                        </div>
                        <p class="text-justify">Our wide array of products are categorized into Test Chambers, Laboratory Equipments, Sterilizers, Clean Room Equipments, Laboratory Water Solutions And Measuring Meters. All our products ensure accuracy and conformity for significant experiments. </p>

                    </div>

                </div>

            </div>
        </div>
-->
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
