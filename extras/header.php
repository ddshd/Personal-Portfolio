<?php
## This disables the underline in the header on iOS Devices.
if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod') !== false) {
  echo '<style>#BodyLinks li a::after {border-bottom: solid 0px !important;}</style>';
}
?>

<style>
  #BodyLinks {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    width: 100%;
    text-align: center;
  }

  #BodyLinks li {
    float: none;
    display: inline-block;
  }

  #BodyLinks li a {
    display: block;
    text-align: center;
    padding: 10px 15px;
    text-decoration: none;
    transition: .3s;
    font-size: 125%;
    text-decoration: none;
    margin: 10px 15px !important;
  }

  @media screen and (max-width: 600px) {
    #BodyLinks li {
      float: none;
      display: block;
    }
    #BodyLinks li a::after {
      border-bottom: solid 0px !important;
    }
  }

  #BodyLinks li a::after {
    display: block;
    content: '';
    border-bottom: solid 3px;
    transform: scaleX(0);
    transition: transform 250ms ease-in-out;
    transform-origin: 100% 50%
  }

  #BodyLinks a:hover::after {
    transform: scaleX(1);
    transform-origin: 0 50%;
  }

  #BodyLinks a,
  #BodyLinks a:active,
  #BodyLinks a:hover,
  #BodyLinks a:focus,
  #BodyLinks a:visited {
    text-decoration: none !important;
  }

  #header {
    background-color: <?php echo $scheme[0]; ?>;
    box-shadow: inset 0px -6px 30px 0px #0000000f;
  }

  #header a {
    color: <?php echo $scheme[1]; ?> !important;
  }

  #BodyLinks li a::after {
    background: <?php echo $scheme[1]; ?> !important;
    background: black;
  }

  body {
    opacity: 0;
  }
</style>

<!-- header localDevEnvironment function is in meta.php -->

<nav>
  <ul id="BodyLinks">
    <center>
      <li><a id="homeLink" href="//<?php echo $_SERVER['HTTP_HOST'];
                                    echo localDevEnvironment(); ?>">Home</a></li>
      <li><a href="<?php echo localDevEnvironment(); ?>/about">About Me</a></li>
      <li><a href="<?php echo localDevEnvironment(); ?>/education">Education</a></li>
      <li><a href="<?php echo localDevEnvironment(); ?>/projects">Projects</a></li>
    </center>
  </ul>
</nav>

<script>
  // auto hide menu links when it links to the same page

  hideLinks();

  function hideLinks() {
    if (document.getElementById("Entrance") != null) {
      return;
    }

    var RemoveQ = document.getElementById("BodyLinks").getElementsByTagName('a');

    for (var i = 0; i < RemoveQ.length; i++) {
      var Url = RemoveQ[i].href.split('/');
      var cUrl = window.location.href.split('/');
      if (Url[Url.length - 1].includes(cUrl[cUrl.length - 1])) {
        RemoveQ[i].style.display = "none";
      }
    }
  };

  // END auto hide menu links when it links to the same page
  $("a").on('click', function(event) {
    if (!$(this).hasClass("email_popup")) {
      $('body').fadeOut(150).delay(500).fadeIn(1000);
    }
  });
  $('body').animate({
    opacity: 1
  });
</script>