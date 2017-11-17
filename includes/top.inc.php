<?php $curUri = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Indywidualna Specjalistyczna Praktyka Lekarska</title>
  <meta name="description" content="Zabiegi operacyjne z zakresu chirurgii ogólnej: klasyczne i laparoskopowe. (wykonywane w ramach kontraku z NFZ)." />
  <meta name="keywords" content="specjalista chirurg, tychy, laparoskopia, esperal, nfz, narodowy fundusz zdrowia, konsultacje chrurgiczne, leczenie alkoholizmu, robert repeć" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../"><span class="logo_colour">Indywidualna Specjalistyczna Praktyka Lekarska</span></a></h1>
          <h2>Robert Repeć</h2>
          <h2>Tychy 43-100 &nbsp;&nbsp; ul.Prze&#347wit 8 &nbsp;&nbsp;&nbsp;&nbsp; Tel: 505 015 727</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="../">Strona G&#322;&#243;wna</a></li>
            <li><a href="/wizyty/">Konsultacja i Wizyty</a></li>
            <li><a href="/contact/">Siedziba</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
      <?php if($curUri != '/wizyty/') : ?>
        <div class="sidebar">
          <h3>Wizyty</h3>
          <p><a href="/wizyty/"><img src="../images/wizytysmall.jpg"></img></a></p>
        </div>
      <?php endif; 
        if($curUri != '/contact/') : ?>
        <div class="sidebar">
          <h3>Siedziba</h3>
          <p><a href="/contact/"><img src="../images/salasmall.jpg"></a></p>
        </div>
      <?php endif; ?>
        <div class="sidebar">
          <h3>Gabinety konsultacyjne</h3>
          <ul>
            <li><a target="_blank" href="http://inmedico.pl/">InMedico</a></li>
            <li><a target="_blank" href="http://euromedic.com.pl/">EuroMedic</a></li>
            <li><a target="_blank" href="http://orbimed.pl/">ORBIMED</a></li>
            <li><a target="_blank" href="http://www.cmhygea.pl/">Hygea Centrum Medyczne</a></li>
            <li><a target="_blank" href="http://www.szpitalmiejskitychy.pl/uslugimedyczne/uslugiplatne/poradniespecjalistyczne/poradnia-chirurgiczna">Gabinet Chirurgiczny Szpital Miejski Tychy</a></li>
          </ul>
        </div>
      </div>