


<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ToNote - Document Management </title>
    <link rel="apple-touch-icon" href="<?php echo url_for('assets/images/ico/apple-icon-120.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url_for('assets/images/ico/favicon.ico') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/vendors.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/charts/apexcharts.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/extensions/toastr.min.css') ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/bootstrap-extended.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/colors.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/components.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/themes/dark-layout.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/themes/bordered-layout.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/themes/semi-dark-layout.min.css') ?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/core/menu/menu-types/horizontal-menu.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/forms/select/select2.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/plugins/extensions/ext-component-toastr.min.css') ?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- END: Custom CSS-->

  </head>


  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    <nav style="height: 70px" class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
      <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="navbar-brand" href="<?php echo url_for('dashboard/') ?>">
              <span class="brand-logo">
                <img src="<?php echo url_for('assets/images/logo/logo-dark.png') ?>" width="200">
              </span>
            </a>
          </li>
        </ul>
      </div>
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" href="<?php echo url_for('documents/') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Manage Document">
                <i class="ficon" data-feather="mail"></i> </a>
            </li>
          </ul>
          
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
          
         
          
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Shafi Akin</span><span class="user-status"></span></div><span class="avatar">
                <!-- <img class="round" src="<?php //echo url_for('app-assets/images/portrait/small/avatar-s-11.jpg') ?>" alt="avatar" height="40" width="40"> -->
                <span class="avatar-status-online"></span></span></a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">

              <a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a>

              


              <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
    <!-- END: Header-->


    <?php if ($page == 'Prepare') { ?>
      <div class="">

    <?php }elseif($page == 'Manage'){ ?>
        <div class="app-content content email-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

    <?php }elseif ($page == 'Dashboard') { ?>

        <div class="app-content content ">
          <div class="content-overlay"></div>
          <div class="header-navbar-shadow"></div>

    <?php }else{ ?>
      <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
    <?php } ?>
     
      
      <div class="content-area-wrapper container-xxl p-0" style="">
        <div class="content-body">



