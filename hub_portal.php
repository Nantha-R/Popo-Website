<?php
include 'phpFiles/utilities.php';
include 'phpFiles/db_utilities.php';
// Check if the user is authorized or not
if(!isset_session('hub_id'))
{
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hub Information</title>
    <?php include 'base_header.html' ?>
    <link rel="stylesheet" type="text/css" href="cssFiles/hub_portal.css">
    <!-- For loading animation -->
    <link href="libraryFiles/loading_bar/dist/app.css" rel="stylesheet">
    <script src="libraryFiles/loading_bar/dist/app.min.js"></script>
    <!-- For datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  </head>
<body>
  <div class="row">
    <div class="col-lg-1 col-md-4 col-sm-4">
      <a href="index.php"> <img src="imageFiles/logo.png" style="width:100px;"/></a>
    </div>
    <span class="title">Hub Portal</span>
  </div>
  <?php include "base_hub_nav_bar.html"; ?>
  <script>
    document.getElementById('hub_portal_header').classList.add('active');
    document.getElementById('hub_portal_header').childNodes[0].removeAttribute('href');
  </script>
  <div class="row center-block">
    <div class="col-lg-8 col-md-8 col-sm-12" style="padding:4%">
      <table class="table-bordered table-striped" id="hub_information_table">
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Date Of entry</th>
            <th>Date Of delivery</th>
            <th>Delivery status</th>
            <th>Source city</th>
            <th>Destination city</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12" style="padding:3%">
      <center>
        <span class="product-id-text">Enter Product ID</span>
        <form action="phpFiles/get_product_by_id.php" method="post">
          <input type="text" name="product_id" style="width:250px"/>
          <br><br>
          <input type="submit" value="Enter" class="btn btn-success "/>
        </form>
      </center>
    </div>
  </div>
</body>
<script type="text/javascript" src="jsFiles/hub_portal.js"></script>
</html>
