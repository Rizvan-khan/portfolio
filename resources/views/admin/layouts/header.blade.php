<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Portfolio Admin Dashboard </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />


    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('admin/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css') }}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/bootstrap-docs.css') }}" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('admin/libs/slick/slick.css') }}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/app.min.css') }}" type="text/css">

</head>

<body>


    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="index.html" class="menu-header-logo">
                <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
            </a>
            <a href="index.html" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">
                        <!-- <img src="../../assets/images/user/man_avatar3.jpg"
                            class="rounded-circle" alt="image"> -->
                    </div>
                    <div>
                        <div class="fw-bold">Admin</div>
                        <!-- <small class="text-muted">Sales Manager</small> -->
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Profile
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                        <i class="bi bi-gear dropdown-item-icon"></i> Settings
                    </a>
                    <a href="logout" class="dropdown-item d-flex align-items-center text-danger"
                        target="_blank">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                    </a>
                </div>
            </div>
            <ul>
                <li class="menu-divider">Portfolio Admin</li>
                <li>
                    <a class="active"
                        href="dashboard">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Manage  Details </span>
                    </a>
                    <ul>

                    
                        <li>
                            <a href="add-details">Personal Details</a>
                        </li>
                     <li>
                            <a href="all-product">All Personal  List
                                </a>
                        </li>

                    </ul>
                </li>

                
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Manage Counter </span>
                    </a>
                    <ul>

                    
                        <li>
                            <a href="add-counter">Add Counter</a>
                        </li>
                    
                    </ul>
                </li>

                  
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Manage Skills </span>
                    </a>
                    <ul>

                    
                        <li>
                            <a href="add-skills">Add Skills</a>
                        </li>
                    
                    </ul>
                </li>

                 <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Manage About </span>
                    </a>
                    <ul>

                    
                        <li>
                            <a href="update-about">Update About</a>
                        </li>
                    
                    </ul>
                </li>


                 <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Manage Service </span>
                    </a>
                    <ul>

                    
                        <li>
                            <a href="add-service">Add Service</a>
                        </li>
                    
                    </ul>
                </li>

                 <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Setting</span>
                    </a>
                    <ul>

                    
                        <li>
                            <a href="setting">Web setting</a>
                        </li>

                           <li>
                            <a href="manage-query">manage Query</a>
                        </li>

                        <li>
                            <a href="add-testimonial">manage Testimonial</a>
                        </li>
                    
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">

        <!-- header -->
        <div class="header">
            <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo -->
            <a href="dashboard" class="logo">
                <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
            </a>
            <!-- ./ Logo -->
            <!-- <div class="page-title">Overview</div> -->
            <form class="search-form">
                <div class="input-group">
                    <button class="btn btn-outline-light" type="button" id="button-addon1">
                        <i class="bi bi-search"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Search..."
                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <a href="#" class="btn btn-outline-light close-header-search-bar">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </form>
          
            <!-- Header mobile buttons -->
            <div class="header-mobile-buttons">
                <a href="#" class="search-bar-btn">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div>
            <!-- ./ Header mobile buttons -->
        </div>
        <!-- ./ header -->