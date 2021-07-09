<html>

<head>
  <?php $title = "Projects"; ?>
  <?php include 'extras/meta.php'; ?>
  <?php include 'ProjectClass.php'; ?>
  <?php function descriptionTag()
  {
    echo "Here are some of the projects I've worked on to build up my experience.";
  }  ?>
  <?php $scheme0 = ['#0d38b1', '#fff']; ?>
  <?php $scheme = ['#3b465c', '#e9e8d4']; ?>
  <?php include 'extras/noscript.php'; ?>
  <!-- Mail link -->
  <script src="https://cdn.jsdelivr.net/npm/mailgo@0.9.18/dist/mailgo.min.js"></script>
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

    .m-by { /* Mail link */
      display: none;
    }

    p {
      opacity: .5;
      font-weight: 100;
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

    .projects h6 {
      margin: 0;
    }
    .projects h2 {
      margin-bottom: 0;
      margin-top: 11;
    }

    .projects a {
      padding: 0 !important;
      /* margin: 10; */
      -webkit-transition: all .2s ease;
      -moz-transition: all .2s ease;
      -o-transition: all .2s ease;
      -ms-transition: all .2s ease;
      transition: all .2s ease;
    }

    .projects *:not(#image):not(#cornericon-container *) {
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
    #cornericon-container * {
      border: none;
    }
    #cornericon-container td {
      padding: 2px;
    }
    #cornericon-container {
      float: right;
      z-index: 1;
    }

    .projects i:not(.cornericon) {
      border-radius: 20px;
      padding-right: 0px !important;
    }

    .projects i:hover:not(.cornericon) {
      transform: scale(1);
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
      .tooltip .tooltiptext:not(.recruiterOnlyButtonLabel) {
        top: 5px;
        right: 100%;
      }

      .fa-lock .tooltiptext {
        top: 2px !important;
        right: 100% !important;
      }

      .tooltip .tooltiptext::after:not(.recruiterOnlyButtonLabel) {
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

      /* Margin-left to center the label is in javascript at the bottom */

      .recruiterOnlyButton {
        font-size: x-small;
      }

    }

    #divider {
      background: <?php echo $scheme[1] ?>;
      width: 1px;
      height: 45px;
      opacity: .3;
      margin: 18px 0px;
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

      <?php
      $data = array_reverse(json_decode($json, true)["projects"]);
      $iTemp1 = 0;
      foreach ($data as $_) {
        $obj = new Project;
        foreach ($_ as $key => $value) {
          switch ($key) {
            case "name":
              $obj->setName($value);
              break;
            case "title":
              $obj->setTitle($value);
              break;
            case "description":
              $obj->setDescription($value);
              break;
            case "short_url":
              $obj->setShortURL($value);
              break;
            case "live_url":
              $obj->setLiveURL($value);
              break;
            case "source_url":
              $obj->setSourceCode($value);
              break;
            case "archive_url":
              $obj->setArchiveURL($value);
              break;
            case "flags":
              sort($value);
              $obj->setFlags($value);
              break;
            case "image_name":
              $obj->image($value);
              break;
            case "contactForSourceCode":
              $obj->setContactForSourceCode();
              break;
          }
        }
        echo $obj->toString();
        if (++$iTemp1 < count($data)) {
          echo "\n<div id=\"divider\"></div>\n";
        }
      }
      ?>

      <script>
        $('.projects').tilt({
          maxTilt: 5,
          speed: 5500, // Speed of the enter/exit transition.
          transition: true, // Set a transition on enter/exit.
          scale: 1.015,
          easing: "cubic-bezier(.03,.98,.52,.99)" // Easing on enter/exit.
        });
    
      /**
       * Set margin-left of the recruiterOnlyButtonLabel so that it is in the center
       * of the button (since button width changes based on device)
       */


      $(document).ready(() => {
        $(".recruiterOnlyButtonLabel")
        .css("margin-left", $(".recruiterOnlyButtonLabel").width() / -1.78);
      });

      </script>

    </center>

    <br><br>

    <?php include 'extras/footer.php'; ?>
  </div>
</body>

</html>