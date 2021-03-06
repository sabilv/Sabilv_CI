<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap CSS  Bootstrap v4.2.1 -->
        <link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Devicon -->
        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- 
            Icons made by "https://www.flaticon.com/authors/twitter" Twitter
            from www.flaticon.com
            is licensed by Creative Commons BY 3.0
        -->
        <link rel="icon" href="<?=base_url()?>assets/img/favicon.png" type="image/gif">
        <!--
        * Start Bootstrap - Clean Blog v5.0.2 (https://startbootstrap.com/template-overviews/clean-blog)
        * Copyright 2013-2018 Start Bootstrap
        * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-clean-blog/blob/master/LICENSE)
        -->
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('assets/css/clean-blog.min.css'); ?>" rel="stylesheet">
        <!-- End of  Start Bootstrap - Clean Blog v5.0.2 -->
        <!-- Recaptcha -->
        <script src='https://www.google.com/recaptcha/api.js?render=6LcTYIUUAAAAANJcsPjCY1dWeIxZqYEa8zt-WBBz'></script>
        <!-- end of Recaptcha -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131451660-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-131451660-1');
        </script>
        <title>Sabilv.xyz - <?php echo $judul; ?></title>
    </head>
    <body>
         <!-- Navigation -->      
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand " href="<?= base_url(); ?>">Sabilv</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>About">About</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>Playlist">Playlist</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>Blog"">Blog</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>Contact"">Contact</a>
                    </div>
                </div>
            </nav>
        </div>