<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SILOKER NF</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>public/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SILOKER NF</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                <?php
                        if($this->session->has_userdata('username')){
                            $username = $this->session->username;
                            $status = 'Logout';
                            $link = base_url().'user/logout';
                        }else{
                            $username = 'Login';
                            $status = 'Login';
                            $link = base_url().'user/login';
                        }
                        ?>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?=$link?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?=$username?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        
                        <li><a class="dropdown-item" href="<?=$link?>"><?=$status?></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?=base_url()?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">LOWONGAN KERJA</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Edit Lowongan Kerja
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lowongankerja.html">Lowongan Kerja</a>
                                    <a class="nav-link" href="peminatlowongan.html">Peminat Lowongan</a>
                                    <a class="nav-link" href="prodi.html">Prodi</a>
                                    <a class="nav-link" href="keahlian.html">Keahlian</a>
                                    <a class="nav-link" href="lowongan keahlian.html">Lowongan Keahlian</a>
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">Mitra</div>
                            <a class="nav-link" href="<?=base_url()?>mitra">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Mitra
                            </a>
                            <a class="nav-link" href="<?=base_url()?>bidang_usaha">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Bidang Usaha
                            </a>
                            <a class="nav-link" href="<?=base_url()?>sektor_usaha">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sektor Usaha
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid">