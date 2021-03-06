<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
    <link rel="icon" href="<?php echo base_url()?>assets/images/swakarya_logo.svg">
    <title>Swakarya - Landing Page</title>
    <script src="https://kit.fontawesome.com/cd64ac8a0b.js" crossorigin="anonymous"></script>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #EEDAD1;">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url()?>assets/images/swakarya_logo.svg" width="200" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="<?php echo base_url()?>index.php/homectl" style="text-transform: capitalize; color: #383E56;">BERANDA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="<?php echo base_url()?>index.php/homectl/viewTheEvents" style="text-transform: capitalize; color: #383E56;">ACARA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="<?php echo base_url()?>index.php/homectl/viewAllUser" style="text-transform: capitalize; color: #383E56;">MITRA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="<?php echo base_url()?>index.php/homectl/edit" style="text-transform: capitalize; color: #383E56; ;">SETELAN</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo base_url()?>index.php/homectl"class="btn my-2 my-sm-0 font-weight-bold cust-button1" href="#"> Hai <?php echo $this->session->userdata('logged_in')["user_nama"];?>! </a>
      </form>
    </div>
  </nav>
	
<body>

<div class="content">
