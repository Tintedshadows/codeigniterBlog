<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
    <title>Fun Blog</title>
  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Fun Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php if(current_url() == base_url() ){echo "active";} ?>">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item <?php if(current_url() == base_url() . 'about'){echo "active";} ?>">
          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
        </li>
        <li class="nav-item<?php if(current_url() == base_url() . 'posts'){echo "active";} ?>">
          <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
        </li>
        <li class="nav-item<?php if(current_url() == base_url() . 'categories'){echo "active";} ?>">
          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="<?php echo base_url(); ?>categories/create">New Category</a>
        <a class="nav-link" href="<?php echo base_url(); ?>posts/create">New Post</a>
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <body>
<div class="container">
