<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Charts - SB Admin</title>
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">BPF TI 2023</a>
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
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/assets/img/profile/') . $user['gambar']; ?>" alt="User Image" class="user-image" style="max-width: 50px; max-height: 50px;">
                    <?= $user['nama']; ?> <i class=""></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </li>
        </ul>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">MENU</div>
                        <?php
                        if ($user['role'] == 'Admin') { ?>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Mahasiswa/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Mahasiswa</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Prodi/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Prodi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Ukm/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Ukm</span>
                                </a>
                            </li>

                        <?php } else {
                        ?>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Profil/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Profil</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Auth/logout') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Logout</span>
                                </a>
                            </li>

                        <?php
                        }

                        ?>

                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">