<?php ?>

<style>

    * {
     box-sizing: border-box;
    }

    *:before, *:after {
     box-sizing: border-box;
    }

    a {
      text-decoration: none;
    }

    footer a {
      color: <?php echo $scheme[1]; ?> !important;
    }

    html, body {
     height: 100%;
     position: relative;
    }

    .body-container {
     min-height: 100vh; /* will cover the 100% of viewport */
     overflow: hidden;
     display: block;
     position: relative;
     padding-bottom: 1px; /* height of your footer */
    }

    footer {
     position: absolute;
     bottom: 0;
     width: 100%;
/*     bottom: 20px;  */
     padding: 20px 0px;
     text-align: center;
     font-size: 125%;
     color: <?php echo $scheme[1]; ?>;
    }

    .fab {
      color: <?php echo $scheme[1]; ?>;
      opacity: .5;
      padding: 2px;
      -webkit-transition: all .2s ease;
      -moz-transition: all .2s ease;
      -o-transition: all .2s ease;
      -ms-transition: all .2s ease;
      transition: all .2s ease;
    }

    .fab:hover {
      opacity: 1;
    }

    i {
      color: <?php echo $scheme[1]; ?>;
      -webkit-transition: all .2s ease;
      -moz-transition: all .2s ease;
      -o-transition: all .2s ease;
      -ms-transition: all .2s ease;
      transition: all .2s ease;
    }

    footer i {
      cursor: pointer;
    }

    footer i:hover {
      transform: scale(1.2);
    }

</style>

<br><br>
<br><br>
<footer><center>
  <a href="//www.linkedin.com/in/dhrumil2504/" target="_blank">
    <i class="fab fa-linkedin"></i>
  </a>
  <a href="//facebook.com/dhrumil2504" target="_blank">
    <i class="fab fa-facebook"></i>
  </a>
  <a href="//github.com/ddshd" target="_blank">
    <i class="fab fa-github"></i>
  </a>
  <div style="opacity:0;height: 5px;padding: 0;margin: 0 !important;"></div>
  <p style="margin:0;padding:0;opacity: .4;font-size: x-small;">© <?php echo date("Y"); ?> Dhrumil Shah. All Rights Rervered. <a href="<?php localDevEnvironment(); ?>/injustice"> No Justice, No Peace.</a><br><b><?php echo $ExtraFooter; ?></b></p>
<center></footer>
