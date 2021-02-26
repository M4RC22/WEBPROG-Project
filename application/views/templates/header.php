<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Alcofil - <?php echo $title; ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="<?php echo base_url("/assets/images/logo.png"); ?>">
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/header.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/home.css");?>"/>
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/footer.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/about.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/contact.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/stations.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("/assets/css/email.css"); ?>" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
                    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                    crossorigin=""/>
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                    crossorigin=""></script> 
        </head>
        <body>
            <?php
                if($this->session->flashdata("message"))
                {
                    echo "
                    <div class='alert alert-success m-0')>
                        ".$this->session->flashdata("message")."
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    ";
                }
            ?>
            <nav>
                <div class="container-row">
                    <div class="logo">
                        <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" width="40px" height="40px"/> 
                        <h6>ALCOFIL<h6>
                    </div>
                    <ul class="nav-links">
                        <li>
                            <a href="<?php echo base_url("home") ?> ">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("stations"); ?>">Stations</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("about"); ?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("contact"); ?>">Contact Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("home/#apply"); ?>" class="special-a">Apply Now</a>
                        </li>
                        
                    </ul>
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
            </nav>

