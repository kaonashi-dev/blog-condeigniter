<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link type="text/css" href="<?php echo CSS . 'argon-design-system.css'?>" rel="stylesheet">

    <!-- JS -->
    <script src="<?php echo JS . 'main.js' ?>"></script>
    <!-- SweetAlert -->
    <script src="<?php echo JS . 'sweetalert2.all.min.js' ?>"></script>

    <!-- VUE - AXIOS -->
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>example</title>
</head>

<body style="background: #cfcdd5;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-default pt-1 pb-1">
        <div class="container">
            <a class="navbar-brand" href="#">
                BLOG
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-default">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-1 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="<?php echo base_url('user/login') ?>">
                            <span class="nav-link-inner--text">INICIAR SESIÓN</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="<?php echo base_url('user/register') ?>">
                            <span class="nav-link-inner--text">REGISTRATE</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-3">