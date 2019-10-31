<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MARKUP</title>
    
    <!-- <link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2"> -->
    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
</head>
<body class="drawer">
    <!-- header -->
    <header id="header">
        <div class="inner">

            <div class="header-logo"><a href="http://localhost/wp_local_01/"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt=""></a></div>
            
            <!-- header-nav -->
               <nav class="header-nav">
                   
                       <ul class="header-list">
                           <li class="m_icon1 menu-item"><a href="http://localhost/wp_local_01/#skills">Skills</a></li>
                           <li class="m_icon2 menu-item"><a href="http://localhost/wp_local_01/#content">Works</a></li>
                           <li class="m_icon3 menu-item"><a href="http://localhost/wp_local_01/about/">About</a></li>
                           <li class="m_icon4 menu-item"><a href="http://localhost/wp_local_01/contact/">Contact</a></li>
                       </ul>
                
               </nav><!-- //header-nav-->

        </div><!-- //inner-->
    </header>