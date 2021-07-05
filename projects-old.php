<html>

<head>
  <?php $title = "Projects"; ?>
  <?php include 'extras/meta.php'; ?>
  <?php function descriptionTag()
  {
    echo "Here are some of the projects I've worked on to build up my experience.";
  }  ?>
  <?php $scheme0 = ['#0d38b1', '#fff']; ?>
  <?php $scheme = ['#3b465c', '#e9e8d4']; ?>
  <?php include 'extras/noscript.php'; ?>
  <style>
    html {
      background-color: <?php echo $scheme[0]; ?>;
      margin: 0;
      color: <?php echo $scheme[1]; ?>;
    }

    a,
    a:hover,
    a:visited,
    a:active {
      color: <?php echo $scheme[1]; ?>;
    }

    p {
      opacity: .5;
      font-weight: 100;
    }

    * {
      margin: 0;
      padding: 0;
    }

    h1 {
      padding: 20px 0px;
    }

    .projects {
      width: 90vw;
      max-width: 400px;
      border: 1px solid <?php echo $scheme[1]; ?>;
      border-radius: 5px;
    }

    .projects a {
      padding: 0 !important;
      -webkit-transition: all .2s ease;
      -moz-transition: all .2s ease;
      -o-transition: all .2s ease;
      -ms-transition: all .2s ease;
      transition: all .2s ease;
    }

    .projects *:not(#image) {
      padding: 1px 10px;
    }

    .projects h2 {
      padding-top: 10px !important;
    }

    .projects #image {
      width: 100%;
      height: 135px;
      background-size: cover;
      margin-top: 10px;
      background-position: center;
      border-top: 4px solid <?php echo $scheme[1]; ?> !important;
      transition: 3s;
      background-repeat: no-repeat;
      border-radius: 0px 0px 4px 4px;
      transform: translateY(0.3px);
    }

    .projects .cornericon {
      float: right;
      padding: 7px !important;
      margin-right: -15px;
    }

    i {
      cursor: pointer;
    }

    .fa-code {
      transform: scale(.8);
    }

    .fa-lock,
    .fa-lock:hover {
      transform: translate(-8px, -1px) !important;
    }

    .projects i:not(.cornericon) {
      border-radius: 20px;
      padding-right: 0px !important;
    }

    .projects i:hover:not(.cornericon) {
      transform: scale(1) !important;
      background-color: <?php echo $scheme[1]; ?>;
      color: <?php echo $scheme[0]; ?>;
      padding-top: 8px !important;
      padding-bottom: 8px !important;
      border-radius: 20px;
    }

    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 70px;
      background-color: <?php echo $scheme[1]; ?>;
      color: <?php echo $scheme[0]; ?>;
      text-align: center;
      border-radius: 6px;
      padding: 5px 10 !important;
      position: absolute;
      z-index: 1;
      opacity: 0;
      -webkit-transition: all .2s ease;
      -moz-transition: all .2s ease;
      -o-transition: all .2s ease;
      -ms-transition: all .2s ease;
      transition: all .2s ease;
    }

    .tooltip .tooltiptext::after {
      content: " ";
      position: absolute;
      bottom: 100%;
      /* At the top of the tooltip */
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: transparent transparent <?php echo $scheme[1]; ?> transparent;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }

    @media screen and (min-width: 500px) {
      .tooltip .tooltiptext {
        top: 100%;
        left: 50%;
        margin-left: -35px;
        /* Use half of the width (120/2 = 60), to center the tooltip */
      }
    }

    @media screen and (max-width: 500px) {
      .tooltip .tooltiptext {
        top: 5px;
        right: 100%;
      }

      .fa-lock .tooltiptext {
        top: 2px !important;
        right: 100% !important;
      }

      .tooltip .tooltiptext::after {
        content: " ";
        position: absolute;
        top: 50%;
        left: 104%;
        /* To the right of the tooltip */
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent transparent <?php echo $scheme[1]; ?>;
      }
    }
  </style>

</head>

<div id="header">
  <?php include 'extras/header.php'; ?>
</div>

<body>
  <div class="body-container">

    <Br>

    <center>
      <h1>Projects</h1>

      <div class="projects SayonaReportingDatabase">
        <div>
          <h4><i class="fas fa-hand-holding-usd tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Paid Work.</span></i></h4>
          <h4><i class="fas fa-lock tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Closed Source.</span></i></h4>
        </div>
        <br>
        <h2>Business Revenue Reporting</h2>
        <br>
        <h5>An MySQL powered fully featured business reporting software. Written in PHP and Javascript with Bootstrap. The entire system was build from ground up for the needs of the business and has been in prodction since late 2016.</h5>
        <br>
        <h5>This project is an internal tool used by the business, there is no public access.</h5>
        <br>
        <div id="image" style="background-image:url(<?php echo localDevEnvironment(); ?>/img/projects/SayonaReportingDatabase.png);"></div>
      </div>

      <div style="background:<?php echo $scheme[1]; ?>;width: 1px;height: 45px;opacity: .3;margin: 18px 0px;"></div>

      <div class="projects VTClassSearch">
        <br>
        <h2>VT (Easy) Class Search</h2>
        <h6>iamdhrumilshah.com/vt</h6>
        <br>
        <h5>A website to enable faster search into Virginia Tech's class timetable.</h5>
        <br>
        <a href="//iamdhrumilshah.com/vt" target="_blank"><i class="fas fa-link"><span> Live Version</span></i></a>
        <br>
        <br>
        <a href="//github.com/ddshd/VTClassSearch" target="_blank"><i class="fas fa-code"><span> Source Code</span></i></a>
        <br><br>
        <div id="image" style="background-image:url(<?php echo localDevEnvironment(); ?>/img/projects/VTClassSearch.png);"></div>
      </div>

      <div style="background:<?php echo $scheme[1]; ?>;width: 1px;height: 45px;opacity: .3;margin: 18px 0px;"></div>

      <div class="projects culdesac">
        <div>
          <h4><i class="fas fa-hand-holding-usd tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Paid Work.</span></i></h4>
          <h4><i class="fas fa-lock tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Closed Source.</span></i></h4>
        </div>
        <br>
        <h2>Culdesac</h2>
        <h6>culdesacbrand.com</h6>
        <br>
        <h5>Culdesac is a brand initiated in Vancouver, BC, Canada which showcases inspiring artists and a clothing brand showcasing the Culdesac brand.</h5>
        <br>
        <a href="//culdesacbrand.com" target="_blank"><i class="fas fa-link"><span> Live Version</span></i></a>
        <br>
        <br>
        <a href="//web.archive.org/web/20190703053023/https://culdesacbrand.com/" target="_blank"><i class="fas fa-archive"><span> Archived Version</span></i></a>
        <br><br>
        <div id="image" style="background-image:url(<?php echo localDevEnvironment(); ?>/img/projects/culdesacbrand.png);background-position: top;"></div>
      </div>

      <div style="background:<?php echo $scheme[1]; ?>;width: 1px;height: 45px;opacity: .3;margin: 18px 0px;"></div>

      <div class="projects kevinhackett">
        <div>
          <h4><i class="fas fa-hand-holding-usd tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Paid Work.</span></i></h4>
          <h4><i class="fas fa-lock tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Closed Source.</span></i></h4>
        </div>
        <br>
        <h2>Kevin Hackett</h2>
        <h6>iamkevinhackett.com</h6>
        <br>
        <h5>Kevin Hackett is an up-and-coming artist from Vancouver, BC, Canada.</h5>
        <br>
        <a href="//iamkevinhackett.com" target="_blank"><i class="fas fa-link"><span> Live Version</span></i></a>
        <br>
        <br>
        <a href="//web.archive.org/web/20190629011606/https://iamkevinhackett.com/" target="_blank"><i class="fas fa-archive"><span> Archived Version</span></i></a>
        <br><br>
        <div id="image" style="background-image:url(<?php echo localDevEnvironment(); ?>/img/projects/kevinhackett.png);"></div>
      </div>

      <div style="background:<?php echo $scheme[1]; ?>;width: 1px;height: 45px;opacity: .3;margin: 18px 0px;"></div>

      <div class="projects sayonallc">
        <div>
          <h4><i class="fas fa-hand-holding-usd tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Paid Work.</span></i></h4>
          <h4><i class="fas fa-lock tooltip cornericon"><span class="tooltiptext" style="font-size:x-small;">Closed Source.</span></i></h4>
        </div>
        <br>
        <h2>Sayona, LLC</h2>
        <h6>sayonallc.com</h6>
        <br>
        <h5>A business working to create a chain of amazing convenience store in the Roanoke Valley area.</h5>
        <br>
        <a href="//sayonallc.com" target="_blank"><i class="fas fa-link"><span> Live Version</span></i></a>
        <br>
        <br>
        <div id="image" style="background-image:url(<?php echo localDevEnvironment(); ?>/img/projects/sayona.png);"></div>
      </div>

      <script>
        $('.projects').tilt({
          maxTilt: 10,
          speed: 5500, // Speed of the enter/exit transition.
          transition: true, // Set a transition on enter/exit.
          scale: 1.005,
          easing: "cubic-bezier(.03,.98,.52,.99)" // Easing on enter/exit.
        });
      </script>

    </center>

    <br><br>

    <?php include 'extras/footer.php'; ?>
  </div>
</body>

</html>