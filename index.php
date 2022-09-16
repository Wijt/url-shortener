<?php
    if (isset($_GET['x'])) {
        error_reporting(E_ALL); // Error reporting
        require "database.php"; // DB connection
        $db = new Database();   // DB Instantiate

        $result = $db->row("*", "relations", array("nickname"=>$_GET['x']));
        if($result){
            header("Location: ".$result["url"]);
            die();
        }
    }
?>
<!DOCTYPE html>
<html style="overflow: auto;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> primelab | url-shortener </title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <style>
        html,body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }
        .hero.is-info {
            background: linear-gradient(
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
                ), url('https://unsplash.it/1200/900?random') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .hero .nav, .hero.is-success .nav {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .hero .subtitle {
            padding: 3rem 0;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-head pt-3">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                            <img style="max-height: none !important;" width="150" src="img/logo.png" alt="Logo">
                        </a>
                        <!--<span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>!-->
                    </div>
                    <!--<div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="#">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>Home</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="#">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>Examples</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="#">
                                    <span class="icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span>Documentation</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/landing.html">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>View Source</span>
                                </a>
                            </span>
                        </div>
                    </div>!-->
                </div>
            </nav>
            </div>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-6 is-offset-3">
                        <h1 class="title">
                                short links, big results
                        </h1>
                        <h2 class="subtitle">
                              primelab, generates short url for your incomprehensible links 
                        </h2>
                        <div class="box">
                            <div class="field is-grouped">
                                <p class="control is-expanded">
                                    <input id="linkinput" class="input" type="text" placeholder="long link here">
                                </p>
                                <p class="control">
                                    <a id="linkbutton" class="button is-info">
                                        make it short!
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        
    <script type="text/javascript">
        $("#linkbutton").click
        (
            function() {
                var url = $("#linkinput").val();
                $("#linkinput").val("");
                var jqxhr = $.post
                (
                    "register-url.php",
                    {data : url},
                    function(data) {
                        navigator.clipboard.writeText(data);
                        Swal.fire({
                            icon: 'success',
                            title: "It's done!",
                            text: "It's on your clipboard!",
                            footer: `your short link:&nbsp<a target="_blank" href="${data}">${data}</a>`
                        });
                    }
                )
            }
        );
    </script>

    <script type="text/javascript">
        // The following code is based off a toggle menu by @Bradcomp
        // source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
        (function() {
            var burger = document.querySelector('.burger');
            var menu = document.querySelector('#'+burger.dataset.target);
            burger.addEventListener('click', function() {
                burger.classList.toggle('is-active');
                menu.classList.toggle('is-active');
            });
        })();

    </script>
</body>

</html>