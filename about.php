<?php
$One = ['#ee5b07', '#541209'];
$Two = ['#1e3b34', '#ffbc00'];
$Three = ['#121638', '#d17c78'];
$Four = ['#102378', '#fbeccf'];
$Five = ['#b6cabf', '#c02a1a'];
?>
<html>

<head>
  <?php $title = "About"; ?>
  <?php include 'extras/meta.php'; ?>
  <?php $ExtraFooter = "Adobe Creative Suite and AutoDESK suite logos are owned by their respectible owners."; ?>
  <?php function descriptionTag()
  {
    echo "Here is a little about me.";
  }  ?>
  <?php include 'extras/noscript.php'; ?>
  <style>
    #BodyLinks li a::after {
      background: <?php echo $scheme[1]; ?>;
    }

    body,
    html {
      background-color: <?php echo $scheme[0]; ?>;
      color: <?php echo $scheme[1]; ?>;
    }

    #BodyLinks {
      margin-top: 10px;
    }

    p {
      width: 90%;
      max-width: 1100px;
      font-size: 130%;
      line-height: 1.6;
    }

    span {
      padding: 7px 12px;
      border: 1px solid;
      border-radius: 10px;
      margin: 5px 6px;
      font-size: 110%;
      display: inline-block;
      transition-timing-function: ease;
    }

    span>i {
      transform: translateZ(8px);
    }

    span>.fab,
    span>.fas {
      opacity: 1;
      color: <?php echo $scheme[0]; ?>;
    }

    .mySkills {
      padding: 45px 25px;
      border-radius: 20px;
      width: 85vw;
      max-width: 600px;
      background-color: <?php echo $scheme[1] ?>;
      color: <?php echo $scheme[0]; ?>;
      box-shadow: 7px 7px 19px 2px #00000030;
      transition-timing-function: ease;
      margin-bottom: 15vh;
    }

    .mySkills img {
      margin: 0px 5px 15px 5px;
      height: 50px;
    }
  </style>
</head>

<div id="header">
  <?php include 'extras/header.php'; ?>
</div>

<body>
  <div class="body-container">
    <center>

      <Br>

      <div id="aboutMe">
        <h1>About Me:</h1>

        <p style="text-align:left;">
        In the year 2009, I emigrated from India to Southwest Virginia. Going from a developing country to one that is a leader in innovation helped me realize the power of technology and I was instantly infatuated. At the age of 13, I developed my first website. Though it was relatively rudimentary, I enjoyed the process so much that I decided to build my skills.
        <br><br>
        Eventually, I replaced my infatuation with a true passion for computers. Since then, I have worked with multiple individuals, companies, and non-profit organizations, trying to better my surroundings with the skill and talent I possess. However, I know there is so much more I can learn and do for the community, which is why I decided to pursue a degree in computer science.
        <br><br>
        As a third year student at Virginia Tech, I am expanding my skills in designing advanced algorithms and developing software. I look forward to working with others in my field to leave the world better than I found it.
        </p>
      </div>

      <Br><Br>


      <div class="mySkills" data-tilt style="transform-style: preserve-3d">
        <div>
          <center>
            <h1 style="margin:0;padding:0;transform: translateZ(22px);">My Skills:</h1>
            <br>

            <span><i class="fab fa-java"></i> Java</span>
            <span><i class="fas fa-terminal"></i> C</span>
            <span><i class="fab fa-swift"></i> Swift</span>
            <span><i class="fab fa-python"></i> Python</span>
            <br>

            <h3 style="transform: translateZ(22px);">Web:</h3>
            <span><i class="fab fa-css3"></i> CSS</span>
            <span><i class="fab fa-html5"></i> HTML</span>
            <span><i class="fab fa-php"></i> PHP</span>
            <span><i class="fas fa-database"></i> MySQL</span>
            <span><i class="fab fa-js-square"></i> Javascript</span>

            <br>
            <br>

            <h3 style="transform: translateZ(22px);">Design:</h3>

            <img draggable="false" src="<?php localDevEnvironment(); ?>/img/about/PP.svg">
            <img draggable="false" src="<?php localDevEnvironment(); ?>/img/about/AF.svg">
            <img draggable="false" src="<?php localDevEnvironment(); ?>/img/about/Photoshop.svg">
            <img draggable="false" src="<?php localDevEnvironment(); ?>/img/about/Muse.svg">

            <br>

            <span>
              <center>
                <img style="background-color: #fbeccf;padding: 10px;border-radius: 8px;" draggable="false" src="<?php localDevEnvironment(); ?>/img/about/Autodesk.svg">
                <br>
                - AutoCAD
                <br>
                - Revit
                <br>
                - Inventor
              </center>
            </span>
          </center>
        </div>
      </div>

      <br>

      <script>
        $('.mySkills').tilt({
          glare: true,
          maxGlare: .10,
          speed: 5400,
          perspective: 300,
          maxTilt: 20,
          transition: true, // Set a transition on enter/exit.
          scale: 1.01,
          easing: "cubic-bezier(.10,.99,.10,.99)" // Easing on enter/exit.
        })
      </script>

    </center>
    <?php include 'extras/footer.php'; ?>
  </div>
</body>

</html>