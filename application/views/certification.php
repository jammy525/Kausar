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
                    <h1 class="entry-title">Certification</h1>
                    <div class="breadcrumb">
                        <div class="container">
                            <ul class="tm_bread_crumb">
                                <li class="top"><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li class="sub tail current">Certification</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-offset-2">
                            <div class="mb-3">
                                <h2>Certification</h2>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>-->
			<div class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients_btn">
                        <div class="section-title">
                            Certification
                                    <p style="font-size: 14px; color: #999999;">Our lab instruments have been installed around India in a wide variety of industries…</p>
                        </div>
                    </div>
                    <div class="myportfolio-container minimal-light ">
                        <div class="row">
                            <div class="slider-wrapper">
                            </div>

                            <ul id="flexiselDemo3">

                               <?php foreach($allcertificates as $cetificate){?>
                                <li>
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="<?=base_url()?>control/upload/certificate/<?php echo $cetificate['certificateImage'];?>" alt="<?php echo $cetificate['certificateName'];?>" title="<?php echo $cetificate['certificateName'];?>">
                                        <div class="overlay">

                                            <p>
                                                <?php echo $cetificate['certificateName'];?>
                                            </p>
                                            <p>
                                                (<?php echo $cetificate['description'];?>)
                                            </p>
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

    <?php 
        if (isset($otherJs)) {
            echo $otherJs;
        }
        ?>
</body>

</html>
