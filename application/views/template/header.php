<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Dreams Pos admin template</title>

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href=""
    />

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css') ?>" />

    <link
      rel="stylesheet"
      href="<?= base_url('assets/plugins/fontawesome/css/fontawesome.min.css') ?>"
    />
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  </head>
  <body>
    <div id="global-loader">
      <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
      <div class="header">
        <div class="header-left active">
          <a href="index.html" class="logo">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="" />
          </a>
          <a href="index.html" class="logo-small">
            <img src="<?= base_url('assets/img/logo-small.png') ?>" alt="" />
          </a>
          <a id="toggle_btn" href="javascript:void(0);"> </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
          <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>

        <ul class="nav user-menu">

          <li class="nav-item dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <img src="<?= base_url('assets/img/icons/notification-bing.svg') ?>" alt="img" />
              <span class="badge rounded-pill">4</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="<?= base_url('assets/img/profiles/avatar-02.jpg') ?>" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">John Doe</span> added new
                            task
                            <span class="noti-title"
                              >Patient appointment booking</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="<?= base_url('assets/img/profiles/avatar-03.jpg') ?>" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Tarah Shropshire</span>
                            changed the task name
                            <span class="noti-title"
                              >Appointment booking with payment gateway</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="<?= base_url('assets/img/profiles/avatar-06.jpg') ?>" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Misty Tison</span> added
                            <span class="noti-title">Domenic Houston</span> and
                            <span class="noti-title">Claire Mapes</span> to
                            project
                            <span class="noti-title"
                              >Doctor available module</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="<?= base_url('assets/img/profiles/avatar-17.jpg') ?>" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Rolland Webber</span>
                            completed task
                            <span class="noti-title"
                              >Patient and Doctor video conferencing</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="<?= base_url('assets/img/profiles/avatar-13.jpg') ?>" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Bernardo Galaviz</span>
                            added new task
                            <span class="noti-title">Private chat module</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities.html">View all Notifications</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown has-arrow main-drop">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle nav-link userset"
              data-bs-toggle="dropdown"
            >
              <span class="user-img"
                ><img src="<?= base_url('assets/img/profiles/avator1.jpg') ?>" alt="" />
                <span class="status online"></span
              ></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
              <div class="profilename">
                <div class="profileset">
                  <span class="user-img"
                    ><img src="<?= base_url('assets/img/profiles/avator1.jpg') ?>" alt="" />
                    <span class="status online"></span
                  ></span>
                  <div class="profilesets">
                    <h6>John Doe</h6>
                    <h5>Admin</h5>
                  </div>
                </div>
                <hr class="m-0" />
                <a class="dropdown-item" href="profile.html">
                  <i class="me-2" data-feather="user"></i> My Profile</a
                >
                <a class="dropdown-item" href="generalsettings.html"
                  ><i class="me-2" data-feather="settings"></i>Settings</a
                >
                <hr class="m-0" />
                <a class="dropdown-item logout pb-0" href="signin.html"
                  ><img
                    src="<?= base_url('assets/img/icons/log-out.svg') ?>"
                    class="me-2"
                    alt="img"
                  />Logout</a
                >
              </div>
            </div>
          </li>
        </ul>

        <div class="dropdown mobile-user-menu">
          <a
            href="javascript:void(0);"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
          </div>
        </div>
      </div>

      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="<?= $active == 'dashboard' ? 'active' : ''; ?>">
                <a href="<?= base_url('/') ?>"
                  ><img src="<?= base_url('assets/img/icons/dashboard.svg') ?>" alt="img" /><span>
                    Dashboard</span
                  >
                </a>
              </li>
              <li class="<?= $active == 'income' ? 'active' : ''; ?>">
                <a href="<?= base_url('index.php/income') ?>"
                  ><img src="<?= base_url('assets/img/icons/purchase1.svg') ?>" alt="img" /><span>
                    Pemasukan</span
                  >
                </a>
              </li>
              <li class="<?= $active == 'expense' ? 'active' : ''; ?>">
                <a href="<?= base_url('index.php/expenses') ?>"
                  ><img src="<?= base_url('assets/img/icons/expense1.svg') ?>" alt="img" /><span>
                    Pengeluaran</span
                  >
                </a>
              </li>
              <li class="submenu <?= $active == 'report' ? 'active' : ''; ?>">
                <a href="javascript:void(0);"
                  ><img src="<?= base_url('assets/img/icons/time.svg') ?>" alt="img" /><span>
                    Laporan</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="#">Pemasukan</a></li>
                  <li><a href="#">Pengeluaran</a></li>
                </ul>
              </li>
              <li class="<?= $active == 'user' ? 'active' : ''; ?>">
                <a href="<?= base_url('index.php/user') ?>"
                  ><img src="<?= base_url('assets/img/icons/users1.svg') ?>" alt="img" /><span>
                    Pengguna</span>
                </a>
              </li>
              <li class="<?= $active == 'product' ? 'active' : ''; ?>">
                <a href="<?= base_url('index.php/product') ?>"
                  ><img src="<?= base_url('assets/img/icons/product.svg') ?>" alt="img" /><span>
                    Produk</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
