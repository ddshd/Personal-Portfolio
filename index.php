<html>
<head>
  <?php $title = "Hi!"; ?>
  <?php include 'extras/meta.php';?>
  <?php function descriptionTag() { echo "Hi! I'm Dhrumil Shah!"; } ?>
  <?php
        $scheme0 = ['#e88565', '#181a27'];
        $scheme = ['#0f0a04', '#faac01'];
  ?>
  <?php include 'extras/noscript.php';?>
<style>

    html, .body-container {

  <?php
    if($scheme[0] == '#0f0a04') {
      echo '
        background: rgb(15,10,4);
        background: -moz-linear-gradient(0deg, rgba(15,10,4,1) 0%, rgba(43,31,15,1) 100%);
        background: -webkit-linear-gradient(0deg, rgba(15,10,4,1) 0%, rgba(43,31,15,1) 100%);
        background: linear-gradient(0deg, rgba(15,10,4,1) 0%, rgba(43,31,15,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0f0a04",endColorstr="#2b1f0f",GradientType=1);';
      } else {
        echo '/* CHECK THE [0] COLOR FOR THE SCHEME ARRAY. IT IS FALSE SO THE GRADIENT IS NOT SHOWN. */';
      }
  ?>

      background-color: <?php echo $scheme[0]; ?>;
    }

    body {
      color: <?php echo $scheme[1]; ?>;
    }

    #EntranceText {
      color: <?php echo $scheme[1]; ?>;
      text-align: left;
      font-size: 10vh;
    }

    #Entrance {
      margin-left: 10vw;
      margin-top: 20vh;
    }

    @media only screen and (max-width: 600px) {
      #Entrance {
        margin-left: 5vw;
        margin-top: 5vh;
      }
      #EntranceText {
        font-size: 8vh;
      }
      .EntranceContinueEmail-active {
        transform: scale(.8) !important;
        transform-origin: top left;
      }
    }

    #Entrance button {
      border-radius: 10px;
      border: 2px solid <?php echo $scheme[1]; ?>;
      color: <?php echo $scheme[1]; ?>;
      background-color: transparent;
      font-size: 30px;
      padding: 10px 15px;
      transition: .3s;
    }

    #Entrance button:hover {
      background-color: <?php echo $scheme[1]; ?>;
      color: <?php echo $scheme[0]; ?>;
      cursor: pointer;
      transition: .3s;
    }

    .EntranceContinueEmail {
      background-color: <?php echo $scheme[1]; ?>;
      border-radius: 10px;
      border: 2px solid transparent;
      color: <?php echo $scheme[0]; ?>;
      font-size: 3vh;
      padding: 15px;
      text-align: left;
      box-shadow: 4px 4px 15px 1px <?php echo $scheme[1]."33"; ?>;
      top: 0;
      z-index: 1;
      position: absolute;
      width: 20%;
      min-width: 300px;
      -webkit-transition: all .6s ease;
      -moz-transition: all .6s ease;
      -o-transition: all .6s ease;
      -ms-transition: all .6s ease;
      transition: all .6s ease;
    }

    .EntranceContinueEmail button {
      border-radius: 10px !important;
      border: 2px solid <?php echo $scheme[0]; ?> !important;
      color: <?php echo $scheme[0]; ?> !important;
      background-color: <?php echo $scheme[1]; ?> !important;
      font-size: 20px !important;
      padding: 5px 10px !important;
      transition: .3s !important;
    }

    .EntranceContinueEmail button:hover {
      background-color: <?php echo $scheme[0]; ?> !important;
      color: <?php echo $scheme[1]; ?> !important;
      cursor: pointer !important;
      transition: .3s !important;
    }

    .EntranceContinueEmail-unactive {
      transform: scale(0)
    }

    .EntranceContinueEmail-active {
      transform: scale(1)
    }

    #BodyLinks a, #BodyLinks a:active, #BodyLinks a:hover, #BodyLinks a:focus, #BodyLinks a:visited, #BodyLinks li a{
      color: <?php echo $scheme[1]; ?>;
    }

    #BodyLinks li a::after {
    background: #fff;
    }

    #homeLink {
      display: none !important;
    }

    .closeButton {
      transition: .5s;
      cursor: pointer;
      -webkit-animation-name: rotateBack; /* Safari 4.0 - 8.0 */
      -webkit-animation-duration: .5s; /* Safari 4.0 - 8.0 */
      animation-name: rotateBack;
      animation-duration: .5s;
      color: <?php echo $scheme[0]; ?> !important;

      border: 4px solid <?php echo $scheme[0]; ?> !important;
      transform: scale(.5);
      padding: 10px 14px;
      font-size: 25px;
      margin: 0;
      border-radius: 300px;
    }

    .closeButton:hover {
      -webkit-animation-name: rotate; /* Safari 4.0 - 8.0 */
      -webkit-animation-duration: .5s; /* Safari 4.0 - 8.0 */
      animation-name: rotate;
      animation-duration: .5s;

      padding: 10px 14px;
      background-color: <?php echo $scheme[0]; ?>;
      color: <?php echo $scheme[1]; ?> !important;
    }

    @keyframes rotate {
      from {transform: scale(.5) rotate(0deg);}
      to {transform: scale(.5) rotate(90deg);}
    }

    @keyframes rotateBack {
      from {transform: scale(.5) rotate(90deg);}
      to {transform: scale(.5) rotate(0deg);}
    }

    @-webkit-keyframes rotate {
      from {transform: scale(.5) rotate(0deg);}
      to {transform: scale(.5) rotate(90deg);}
    }

    @-webkit-keyframes rotateBack {
      from {transform: scale(.5) rotate(90deg);}
      to {transform: scale(.5) rotate(0deg);}
    }

  </style>
</head>

<body>
<div class="body-container">

<div id="Entrance">
    <h1 id="EntranceText">Hi,<br>I'm Dhrumil Shah!</h1>
    <div style="position:relative;">
      <button class="GetInTouchButton">Get in touch!</button>
      <div class="EntranceContinueEmail-unactive EntranceContinueEmail">

        <div style="position: absolute;float: right;right: -8;bottom: -8;">
          <i class="fas closeButton fa-times"></i>
        </div>

        <h5 style="margin: 0;">This will open your email software.</h5><br>
        <script type="text/javascript" language="javascript">
        <!--
        { coded = "Wx9juWj@MuhOq0fhMJFquq.Wxh"
          key = "8KNPMJLtFSOez5kYf3QH10c4qoaGXwnygjm6UAbZilEpsBdDWvVxu7T29rRChI"
          shift=coded.length
          link=""
          for (i=0; i<coded.length; i++) {
            if (key.indexOf(coded.charAt(i))==-1) {
              ltr = coded.charAt(i)
              link += (ltr)
            }
            else {
              ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
              link += (key.charAt(ltr))
            }
          }
        document.write("<a href='mailto:"+link+"'><button id='mailtoContactLink'>Continue</button></a>")
        }
        //-->
        </script>

      </div>
    </div>
</div>

<center>
<h1 id="LearnAboutMeButton">Learn more about me:</h1>
</center>
<?php include 'extras/header.php';?>

<br>

<?php
  if (file_exists("resume.pdf")) {
    echo '<ul id="BodyLinks"><center><li style="font-size: x-large;"><a href="';
    localDevEnvironment();
    echo '/resume">Resume</a></li></center></ul>';
  }
?>

<br><br><br>
<?php include 'extras/footer.php'; ?>

</div>
</body>
<script>
  $(".GetInTouchButton").click(function() {
      $('.EntranceContinueEmail').addClass('EntranceContinueEmail-active');
      $('.GetInTouchButton').animate({ opacity: 0 });
  });

  $(".closeButton").click(function() {
      $('.EntranceContinueEmail').removeClass('EntranceContinueEmail-active');
      $('.GetInTouchButton').animate({ opacity: 1 });
  });
</script>
</html>
