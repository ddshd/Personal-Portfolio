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
  <?php $ExtraFooter = "Adobe Creative Suite and AutoDESK suite logos are owned by their respectible owners."; ?>
  <?php include 'extras/meta.php';?>
  <?php function descriptionTag() { echo "Here is a little about me."; }  ?>
<style>


  #BodyLinks li a::after {
    background: <?php echo $scheme[1]; ?>;
  }

  body, html {
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

  span > i {
    transform: translateZ(8px);
  }

  span > .fab {
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
  <?php include 'extras/header.php';?>
  </div>

<body>
<div class="body-container">
  <center>

  <Br>

<div id="aboutMe">
    <h1>About Me:</h1>

  <p style="text-align:left;">
    I’m a computer science student at Virginia Tech learning to expand my skills developing and designing software. At the age of 13, I built my first website and from then on I've been working hard to imporve my skills. I am looking forward to working with my peers on projects expanding across multiple languages and changing somebody’s life for the better. I’ve worked in my community for my past four years and I’m looking forward to continue to work for the community and help the people in need with my talent. I emigrated from my home country, India in November of 2009 to the small town of Roanoke, VA and after experiencing the hardships people in developing countries experience first-hand, I’m willing to dedicate my future life to changing others and watching the smile on others faces. I’m hoping to leave this world changed then how I entered it.
  </p>
</div>

  <Br><Br>


<div class="mySkills" data-tilt style="transform-style: preserve-3d">
  <div>
    <center>
      <h1 style="margin:0;padding:0;transform: translateZ(22px);">My Skills:</h1>

      <h3 style="transform: translateZ(22px);">Web:</h3>
      <span><i class="fab fa-css3"></i> CSS</span>
      <span><i class="fab fa-html5"></i> HTML</span>
      <span><i class="fab fa-php"></i> PHP</span>
      <span><i class="fab fa-js-square"></i> Javascript</span>

      <br>
      <br>

      <h3 style="transform: translateZ(22px);">Design:</h3>

      <img draggable="false"  src="<?php localDevEnvironment(); ?>/img/about/PP.svg">
      <img draggable="false"  src="<?php localDevEnvironment(); ?>/img/about/AF.svg">
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
    transition: true,   // Set a transition on enter/exit.
    scale: 1.01,
    easing: "cubic-bezier(.10,.99,.10,.99)" // Easing on enter/exit.
})
</script>

</center>
  <?php include 'extras/footer.php'; ?>
</div>
</body>
</html>
