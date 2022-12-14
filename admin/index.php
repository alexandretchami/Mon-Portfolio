<?php
require('../include/db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  header("Location: login.php");
}
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo,admin";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>panneau d'administration | Tableau de bord</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" href="../include/logout.php">
            Se d??connecter
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">panneau d'administration</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../images/<?php echo $user_data['admin_profile']; ?>" class="img-circle elevation-2"
              alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $user_data['fullname']; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link">
                <i class="fa fa-th-large" aria-hidden="true"></i>
                <p>
                  Contr??le de section
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?homesetting=true" class="nav-link">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>
                  R??glage de la page d'acceuil
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?aboutsetting=true" class="nav-link">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                <p>
                  ?? propos du r??glage
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?resumesetting=true" class="nav-link">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <p>
                  Reprendre le r??glage
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?portfoliosetting=true" class="nav-link">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                <p>
                  Param??tre du portfolio
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?contactsetting=true" class="nav-link">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>
                  Param??tres de contact
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?changebackground=true" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <p>
                  Changement de fond
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?seosetting=true" class="nav-link">
                <i class="fa fa-search" aria-hidden="true"></i>
                <p>
                  Param??tre de r??f??rencement
                </p>
              </a>

            </li>
            <li class="nav-item menu-open">
              <a href="index.php?accountsetting=true" class="nav-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p>
                  Param??tre du compte
                </p>
              </a>

            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <?php
            if (isset($_GET['homesetting'])) { ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Headline</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $user_data['title']; ?>"
                      id="exampleInputEmail1" placeholder="Enter headline">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subtitle</label>
                    <input type="text" class="form-control" name="subtitle"
                      value="<?php echo $user_data['subtitle']; ?>" id="exampleInputPassword1"
                      placeholder="Enter subtitle">
                  </div>

                  <div class="form-check">
                    <input type="checkbox" name="showicons" class="form-check-input" id="exampleCheck1" <?php

                                                                                                          if ($user_data['show_icons']) {
                                                                                                            echo "checked";
                                                                                                          } ?>>
                    <label class="form-check-label" for="exampleCheck1">Show Social Icons</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <?php

            } else if (isset($_GET['aboutsetting'])) {
            ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">php</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?php echo $user_data['profile_pic']; ?>" class="col-2">

              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">About Profile Pic</label>
                    <input type="file" class="form-control" name="profile_pic">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">About Headline</label>
                    <input type="text" class="form-control" name="about_title"
                      value="<?php echo $user_data['about_title']; ?>" id="exampleInputEmail1"
                      placeholder="Enter headline">
                  </div>back

                  <div class="form-group">
                    <label for="exampleInputPassword1">About Subtitle</label>
                    <input type="text" class="form-control" name="about_subtitle"
                      value="<?php echo $user_data['about_subtitle']; ?>" id="exampleInputPassword1"
                      placeholder="Enter subtitle">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About Description</label><br>
                    <textarea cols="100" name="about_desc"><?php echo $user_data['about_desc']; ?></textarea>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-about" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Skills</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Skills</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Skill Name</th>
                        <th>Skill Level</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $q = "SELECT * FROM skills";
                        $r = mysqli_query($db, $q);
                        $c = 1;
                        while ($skill = mysqli_fetch_array($r)) {
                        ?>
                      <tr>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $skill['skill_name']; ?></td>
                        <td>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger"
                              style="width: <?php echo $skill['skill_level']; ?>%"></div>
                          </div>
                          <span class="badge bg-danger"><?php echo $skill['skill_level']; ?>%</span>
                        </td>
                        <td>
                          <a href="../include/deleteskill.php?id=<?php echo $skill['id']; ?>">Delete</a>
                        </td>
                      </tr>
                      <?php
                          $c++;
                        }

                        ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

              <form role="form" action="../include/admin.php" method="POST">
                <div class="card-body">

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skill Name</label>
                    <input type="text" class="form-control" name="skill_name">
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skill Level</label>
                    <input type="range" min="1" max="100" class="form-control" name="skill_level"
                      id="exampleInputEmail1">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-skill" class="btn btn-primary">Add Skill</button>
                </div>
              </form>
            </div>

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Personal Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Personal Info</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Label</th>
                        <th>Value</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $q = "SELECT * FROM personal_info";
                        $r = mysqli_query($db, $q);
                        $c = 1;
                        while ($pi = mysqli_fetch_array($r)) {
                        ?>
                      <tr>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $pi['label']; ?></td>
                        <td><?php echo $pi['value']; ?></td>

                        <td>
                          <a href="../include/deletepi.php?id=<?php echo $pi['id']; ?>">Delete</a>
                        </td>
                      </tr>
                      <?php
                          $c++;
                        }

                        ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

              <form role="form" action="../include/admin.php" method="POST">
                <div class="card-body">

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Label Name</label>
                    <input type="text" class="form-control" name="label">
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Label Value</label>
                    <input type="text" class="form-control" name="value" id="exampleInputEmail1">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-pi" class="btn btn-primary">Add Personal Info</button>
                </div>
              </form>
            </div>

            <?php
            } elseif (isset($_GET['resumesetting'])) {
            ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Resume</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Education & Work</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Institute/company</th>
                        <th>About</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $q = "SELECT * FROM resume";
                        $r = mysqli_query($db, $q);
                        $c = 1;
                        while ($pi = mysqli_fetch_array($r)) {
                        ?>
                      <tr>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $pi['type']; ?></td>
                        <td><?php echo $pi['title']; ?></td>
                        <td><?php echo $pi['time']; ?></td>
                        <td><?php echo $pi['org']; ?></td>
                        <td><?php echo $pi['about_exp']; ?></td>

                        <td>
                          <a href="../include/deleteresume.php?id=<?php echo $pi['id']; ?>">Delete</a>
                        </td>
                      </tr>
                      <?php
                          $c++;
                        }

                        ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                    <select name="type" class="form-control">
                      <option value="e">Education</option>
                      <option value="p">Professionnal</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Institute/Company</label>
                    <input type="text" class="form-control" name="org" id="exampleInputEmail1">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text" class="form-control" name="time" id="exampleInputEmail1">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">About</label>
                    <input type="text" class="form-control" name="about" id="exampleInputEmail1">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-resume" class="btn btn-primary">Add Details</button>
                </div>
              </form>
            </div>
            <?php
            } elseif (isset($_GET['portfoliosetting'])) {
            ?>

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Your Projects</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Project Type</th>
                        <th>Project Image</th>
                        <th>Project Name</th>
                        <th>Project Link</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $q = "SELECT * FROM portfolio";
                        $r = mysqli_query($db, $q);
                        $c = 1;
                        while ($pi = mysqli_fetch_array($r)) {
                        ?>
                      <tr>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $pi['project_type']; ?></td>
                        <td><img src="../images/<?php echo $pi['project_pic'];  ?>" style="width:150px"></td>
                        <td><?php echo $pi['project_name']; ?></td>
                        <td><a href="<?php echo $pi['project_link']; ?>" target="_blank">Open Link</a></td>


                        <td>
                          <a href="../include/deleteportfolio.php?id=<?php echo $pi['id']; ?>">Delete</a>
                        </td>
                      </tr>
                      <?php
                          $c++;
                        }

                        ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                    <select name="type" class="form-control">
                      <option value="SOFTWARE">SOFTWARE</option>
                      <option value="APP">APP</option>
                      <option value="WEBSITE">WEBSITE</option>
                      <option value="IDEA">IDEA</option>
                      <option value="PRODUCT">PRODUCT</option>
                      <option value="VIDEO">VIDEO</option>
                      <option value="ANIMATION">ANIMATION</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Image</label>
                    <input type="file" class="form-control" name="project_pic">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" class="form-control" name="project_name" id="exampleInputEmail1">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Link</label>
                    <input type="text" class="form-control" name="project_link" id="exampleInputEmail1">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-project" class="btn btn-primary">Add Project</button>
                </div>
              </form>
            </div>
            <?php

            } elseif (isset($_GET['contactsetting'])) {
            ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Contact Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $user_data['address']; ?>"
                      id="exampleInputEmail1" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email ID</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $user_data['email']; ?>"
                      id="exampleInputPassword1" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="<?php echo $user_data['mobile']; ?>"
                      id="exampleInputPassword1" placeholder="Enter mobile no ">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-contact" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Social Media Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $user_data['twitter']; ?>"
                      id="exampleInputEmail1" placeholder="Enter username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Facebook</label>
                    <input type="text" class="form-control" name="facebook"
                      value="<?php echo $user_data['facebook']; ?>" id="exampleInputPassword1"
                      placeholder="Enter username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" class="form-control" name="instagram"
                      value="<?php echo $user_data['instagram']; ?>" id="exampleInputPassword1"
                      placeholder="Enter username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Github</label>
                    <input type="text" class="form-control" name="github" value="<?php echo $user_data['github']; ?>"
                      id="exampleInputPassword1" placeholder="Enter username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Linkedin</label>
                    <input type="text" class="form-control" name="linkedin"
                      value="<?php echo $user_data['linkedin']; ?>" id="exampleInputPassword1"
                      placeholder="Enter username">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-socialmedia" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <?php
            } elseif (isset($_GET['changebackground'])) {
            ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Change Site Background</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?php echo $user_data['background_img']; ?>" class="col-6">
              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Choose Background Image</label>
                    <input type="file" class="form-control" name="background">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-background" class="btn btn-primary">Update Background</button>
                </div>
              </form>
            </div>
            <?php
            } elseif (isset($_GET['seosetting'])) {
            ?>

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update SEO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?php echo $user_data['siteicon']; ?>" class="col-2">
              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Siteicon</label>
                    <input type="file" class="form-control" name="siteicon">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" class="form-control" name="page_title"
                      value="<?php echo $user_data['page_title']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Keywords (separate with ,)</label>
                    <input type="text" class="form-control" name="keyword "
                      value="<?php echo $user_data['keywords']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description"
                      value="<?php echo $user_data['description']; ?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-account" class="btn btn-primary">Update Account</button>
                </div>
              </form>
            </div>

            <?php
            } elseif (isset($_GET['accountsetting'])) {
            ?>

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Account Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?php echo $user_data['admin_profile']; ?>" class="col-2">
              <form role="form" action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Profile Pic</label>
                    <input type="file" class="form-control" name="profilepic">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" name="fullname"
                      value="<?php echo $user_data['fullname']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $user_data['email']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" name="password"
                      value="<?php echo $user_data['password']; ?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-seo" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <?php
            } else {
            ?>

            <form action="../include/admin.php" method="POST">

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="home" class="custom-control-input" id="customSwitch1" <?php

                                                                                                      if ($user_data['home_section']) {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                <label class="custom-control-label" for="customSwitch1">Home Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="about" class="custom-control-input" id="customSwitch2" <?php
                                                                                                      if ($user_data['about_section']) {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                <label class="custom-control-label" for="customSwitch2">About Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="resume" class="custom-control-input" id="customSwitch3" <?php
                                                                                                        if ($user_data['resume_section']) {
                                                                                                          echo "checked";
                                                                                                        } ?>>
                <label class="custom-control-label" for="customSwitch3">Resume Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="portfolio" class="custom-control-input" id="customSwitch4" <?php
                                                                                                          if ($user_data['portfolio_section']) {
                                                                                                            echo "checked";
                                                                                                          } ?>>
                <label class="custom-control-label" for="customSwitch4">Portfolio Section</label>
              </div>

              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" name="contact" class="custom-control-input" id="customSwitch5" <?php
                                                                                                        if ($user_data['contact_section']) {
                                                                                                          echo "checked";
                                                                                                        } ?>>
                <label class="custom-control-label" for="customSwitch5">Contact Section</label>
              </div>
              <input type="submit" class="btn btn-sm btn-primary" name="update-section" value="Save Changes">

            </form>
            <?php
            }
            ?>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Alexandre Tchami</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>