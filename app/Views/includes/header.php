<!DOCTYPE html>
<html>

<head>
  <title>CodeIgniter 4 Crud</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/materialize.min.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/style.css" />
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <div class="nav-wrapper">
      <a href="<?php echo site_url(); ?>" class="brand-logo">CodeIgniter CRUD</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  <!-- Navigation Bar -->

  <!-- Session -->
  <?php if (isset($_SESSION['msg'])) : ?>
    <div class="alert white-text"><?= $_SESSION['msg']; ?> <button id="closebtn" type="button" class="btn"><i class="material-icons">close</i></button></div>
  <?php endif; ?>
  <!-- Session -->