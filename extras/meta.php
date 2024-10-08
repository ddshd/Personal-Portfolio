<?php
$fullTitle = $title . " - Dhrumil Shah";

function urlTag()
{
  echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function site_imageTag()
{
  echo 'https://' . $_SERVER['HTTP_HOST'] . "/img/socialThumb.png";
}

// Don't run if not even $One is defined
if (isset($One)) {
  // Theese are defined in the file where this file is imported
  $input = array($One, $Two, $Three, $Four, $Five);
  $rand_keys = array_rand($input, 2);
  $scheme = $input[$rand_keys[0]];
}

?>

<?php

// get current directory in a localdev environment after the
// local domain and then attach that directory in front of
// the all the urls (whever the function is called)
// will only work on localhost, 127.0.0.1, and the device's local ip supplied in $DeviceLocaliP


function localDevEnvironment()
{
  $currentDomain = $_SERVER['HTTP_HOST'];
  $currentD = "$currentDomain";

  $DeviceLocaliP = "192.168.1.149";

  $Fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  $urlFirstDir = explode('/', str_ireplace(array('http://', 'https://'), '', $Fullurl));
  if ($currentD == "iamdhrumilshah.com" && $urlFirstDir[1] == "develop") {
    return "/" . $urlFirstDir[1];
  } elseif ($currentD == "[::ffff:0:0]" || $currentD == "[::]" || $currentD == "[::1]" || $currentD == "localhost" || $currentD == $DeviceLocaliP || $currentD == "127.0.0.1" || $currentD == "0.0.0.0") {
    return "/" . $urlFirstDir[1];
  }
}

?>

<!--
Thanks to Font Awesome for access to the free, amazing, and easy-to-use webfonts for symbols and logos.
===============================================
<?php include 'LICENSE'; ?>
-->

<title><?php echo $fullTitle; ?></title>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js'></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/bf829c4fd5.js" crossorigin="anonymous"></script>


<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="<?php echo localDevEnvironment(); ?>/extras/favicon.png" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Dhrumil Shah">
<meta name="viewport" content="width = device-width">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-icon" href="https://avatars.io/twitter/dhrumil2504">


<!-- Search Engine -->
<meta name="description" content="<?php descriptionTag(); ?>">
<meta name="image" content="<?php site_imageTag(); ?>">
<!-- Schema.org for Google -->
<meta itemprop="name" content="<?php echo $title; ?> - Dhrumil Shah">
<meta itemprop="description" content="<?php descriptionTag(); ?>">
<meta itemprop="image" content="<?php site_imageTag(); ?>">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $title; ?> - Dhrumil Shah">
<meta name="twitter:description" content="<?php descriptionTag(); ?>">
<meta name="twitter:site" content="@dhrumil2504">
<meta name="twitter:image:src" content="<?php site_imageTag(); ?>">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="<?php echo $title; ?> - Dhrumil Shah">
<meta name="og:description" content="<?php descriptionTag(); ?>">
<meta name="og:image" content="<?php site_imageTag(); ?>">
<meta name="og:url" content="<?php urlTag(); ?>">
<meta name="og:site_name" content="<?php echo $title; ?> - Dhrumil Shah">
<meta name="og:type" content="website">

<?php include 'extras/googleAnalytics.php' ?>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Person",
    "name": "Dhrumil Shah",
    "url": "https://iamdhrumilshah.com",
    "sameAs": [
      "https://facebook.com/dhrumil2504",
      "https://twitter.com/dhrumil2504",
      "https://instagram.com/dhrumil2504",
      "https://vsco.co/dhrumil2504",
      "https://venmo.com/dhrumil2504",
      "https://cash.me/$dhrumil2504",
      "https://www.snapchat.com/dhrumil2504"
    ]
  }
</script>

<script type="application/javascript">
  function getIP(json) {
    var ip = json.ip;
    dataLayer.push({
      "event": "ipEvent",
      "ipAddress": json.ip
    });
  }
</script>
<script type="application/javascript" src="https://api.ipify.org/?format=jsonp&callback=getIP"></script>


<!-- Prevent links in standalone web apps opening Mobile Safari -->
<script type="text/javascript">
  if (("standalone" in window.navigator) && window.navigator.standalone) {
    var noddy, remotes = false;
    document.addEventListener('click', function(event) {
      noddy = event.target;
      while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
        noddy = noddy.parentNode;
      }
      if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
        event.preventDefault();
        document.location.href = noddy.href;
      }
    }, false);
  }
</script>


<!-- enables hover effects on mobile -->
<script>
  document.addEventListener("touchstart", function() {}, true);
</script>


<style>
  *:focus {
    outline: 0 !important;
  }

  a,
  i>span:not(li):not(ul):not(center) {
    cursor: pointer !important;
  }

  a,
  a:active,
  a:hover,
  a:focus,
  a:visited {
    text-decoration: none !important;
    color: inherit;
  }

  * {
    cursor: default;
    font-family: 'Roboto', 'Arial';
  }

  body {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin: 0;
    padding: 0;
  }

  html {
    margin: 0;
    padding: 0;
  }
</style>