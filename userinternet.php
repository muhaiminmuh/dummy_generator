<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';


$faker = Faker\Factory::create('en_US');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Dummy Generator</title>

  <!-- CSS  -->
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Table Export -->
  <link href="js/tableexport/tableexport.css" rel="stylesheet">
  

</head>


<body id="home" class="scrollspy">

  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="brown">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Dummy_Generator</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </div>
    </nav>
  </div>
  <!--  -->


  <!-- Sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="http://muhaiminmuh.github.io" target="_blank">About Me</a></li>
    <li><a href="http://muhaiminmuh.github.io" target="_blank" class="brown white-text">Created by _muhaimin_m</a></li>
  </ul>
  <!--  -->


<!-- Content -->

<section id="contact" class="contact scrollspy grey lighten-3">
  <div class="container">

    <div class="row center s12">
      <div class="col m12 s12">
        <div class="card-panel brown center white-text">
          <i class="material-icons medium">add_circle</i>
          <h5>Single Data - Dummy Generator</h5>
        </div>

      <ul class="collection with-header">
        <li class="collection-header">
          <div class="row s12">
            <div class="input-field col s12 m12">
              
              <a class="waves-effect waves-light btn center" href="userinternet.php">Generate Data Again</a>
            </div>
          </div>
        <li class="collection-item"><h5><?php echo $faker->ipv4 ?></h5></li>
        <li class="collection-item">IPv6 : <?php echo $faker->ipv6 ?></li>
        <li class="collection-item">MAC Address : <?php echo $faker->macAddress ?></li>
        <li class="collection-item">User Agent : <?php echo $faker->userAgent ?></li>
        <li class="collection-item">Url : <?php echo $faker->url ?></li>
        <li class="collection-item">DateTime, Timezone : <?php echo $faker->date($format = 'Y-m-d', $max = 'now') ." ". $faker->time($format = 'H:i:s', $max = 'now') ." ". $faker->timezone ?></li>
      </ul>
     
      </div>
    </div>
  </div>
</section>

<!--  -->


<section id="contact" class="contact scrollspy grey lighten-3">
  <div class="container">

    <div class="row center">
      <div class="cd1 col m12 s12">
        <div class="card-panel brown center white-text">
          <i class="material-icons medium">library_add</i>
          <h5>Multiple Data - Dummy Generator</h5>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="cd1 col m12 s12">
        <div class="card-panel">
          <table class="table responsive-table" data-name="cool-table">
          <thead>
            <tr>
                <th>IPv4</th>
                <th>IPv6</th>
                <th>Mac Address</th>
                <th>User Agent</th>
                <th>Timezone</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < 20; $i++): ?>

            <tr>
              <td id="ipv4"><?php echo $faker->ipv4 ?></td>
              <td id="ipv6"><?php echo $faker->ipv6 ?></td>
              <td id="macAddress"><?php echo $faker->macAddress ?></td>
              <td id="userAgent"><?php echo $faker->userAgent ?></td>
              <td id="timezonem"><?php echo $faker->timezone ?></td>
            </tr>
            <?php endfor; ?>
          </tbody>
          </table>          
        </div>
      </div>
    </div>
  </div>

</section>


<!-- Floating Button -->

<div class="fixed-action-btn">
  <a class="btn-floating btn-large waves-effect waves-light blue pulse">
    <i class="large material-icons">menu</i>
  </a>
  <ul>
    <li><a onclick="M.toast({html: '<strong>Home</strong>', classes: 'rounded, blue'})" class="btn-floating red" href="#home"><i class="material-icons">arrow_upward</i></a></li>
    <li><a onclick="M.toast({html: '<strong>Created by _muhaimin_m</strong>', classes: 'rounded, blue'})" class="btn-floating yellow darken-1" href="#home"><i class="material-icons">format_quote</i></a></li>
    <li><a onclick="M.toast({html: '<strong>Dummy Generator</strong>', classes: 'rounded, blue'})" class="btn-floating green" href="#home"><i class="material-icons">person_pin</i></a></li>
  </ul>
</div>

<!--  -->


  <footer class="page-footer brown">
    <div class="container">
      <div class="row center">
        <div class="col s12 m12 center">
          <a href="https://github.com/muhaiminmuh" class="btn btn-danger">Enter To Github<i class="material-icons right">play_circle_outline</i></a>
            <div class="col s12 center">
              <p class="grey-text text-lighten-4">Twitter . Facebook . Instagram</p>
            </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">&copy; Copyright 2018 | by Muhaimin Muhammad
      <a class="black-text text-lighten-4 right" href="http://materializecss.com">CSS Framework by MaterializeCSS</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/script.js"></script>
  <script src="js/tableexport/FileSaver.js"></script>
  <script src="js/tableexport/tableexport.js"></script>
  <script src="js/tableexport/Blob.js"></script>
  <script src="js/tableexport/xlsx.core.min.js"></script>

  <script>

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    $(document).ready(function(){
      $('select').formSelect();
    });

    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 46
    });

    const floating = document.querySelectorAll('.fixed-action-btn');
    M.FloatingActionButton.init(floating, {
      direction: 'left'
    });

  </script>

  </body>
</html>
