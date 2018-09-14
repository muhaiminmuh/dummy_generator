
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
</head>


<body id="home" class="scrollspy">

  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="brown">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">Dummy_Generator</a>
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

<section id="content" class="content scrollspy grey lighten-3">
  <div class="container">
    <!-- <h3 class="light grey-text text-darken-3 center">Dummy Generator</h3> -->
    <div class="row center">
      <div class="cd1 col m12 s12">
        <div class="card-panel brown center white-text">
          <i class="material-icons medium">add_circle</i>
          <h5>Generate Data Dummy Here</h5>
        </div>

      <ul class="collection with-header">
        <li class="collection-header"><br><br>
          <div class="row">
            <p>Dummy Generator adalah tools yang digunakan untuk membuat data palsu secara random</p>
            <p>Tool ini dapat membuat membuat data palsu dari berbagai negara dan 2 jenis data informasi, yaitu informasi user dan informasi user internet</p>
            <br>
          </div>
          <div class="row">
            <div class="input-field col s12 m12">
            <br>
             <form action="userinfo.php" method="POST">
              <select name="id_local">
                <option value="en_US">US</option>
                <option value="en_IN">IN</option>
                <option value="en_FR">FR</option>
                <option value="id_ID" selected>ID</option>
                <option value="zh_CN">CN</option>
                <option value="de_DE">DE</option>
                <option value="ja_JP">JP</option>
                <option value="es_ES">ES</option>
                <option value="ru_RU">RU</option>
              </select>
              <label><h6>Localization</h6></label>
            </div>

                <div class="input-field col s12 m12">
                  <button class="waves-effect waves-light btn left" name="submituser">Generate Data For User Informations</button>
                </div>
              </form>

            <div class="input-field col s12 m12">
              <a class="waves-effect waves-light btn left" href="userinternet.php">Generate Data For Internet User Informations</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!--  -->


<!-- Content -->

<section id="content" class="content scrollspy grey lighten-3">
  <div class="container">
    <!-- <h3 class="light grey-text text-darken-3 center">Dummy Generator</h3> -->
    <div class="row center">
      <div class="cd1 col m12 s12">
        <div class="card-panel brown center white-text">
          <i class="material-icons medium">group_add</i>
          <h5>NIK KK Generator</h5>
        </div>

      <ul class="collection with-header">
        <li class="collection-header"><br><br>
          <div class="row">
            <p>NIK KK Generator adalah tool digunakan untuk membuat data NIK dan KK secara random</p>
            <p>Gunakan tool ini dengan bijaksana</p>
            <br>
          </div>
          <div class="row">
            <div class="input-field col s12 m12">
              <a class="waves-effect waves-light btn center" href="#">Generate NIK KK Now</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!--  -->


<section id="thanks" class="thanks scrollspy grey lighten-3">
  <div class="container">
    <div class="row center">
      <div class="cd1 col m12 s12">
        <div class="card-panel center">
          <h6><em>*** Comming Soon ***</em><h6>
            <p>Dummy Generator v2</p>
            <p>New Features = NIK KK Generator</p>
        </div>
        <div class="card-panel brown center white-text">
          <h5>Special Thanks to <a href="https://github.com/fzaninotto/Faker">Faker</a></h5>
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

    $(function() {
        $('#ex').dataTable();
    });

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

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
