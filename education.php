<html>
<head>
  <?php  $title = "Education"; ?>
  <?php include 'extras/meta.php';?>
  <?php function descriptionTag() { echo "Here is a little about my past educational experience."; }  ?>
  <?php $scheme = ['#a6cfe2', '#0b0c10']; ?>
  <?php include 'extras/noscript.php';?>
<style>

  body, html {
    background-color: <?php echo $scheme[0]; ?>;
    color: <?php echo $scheme[1]; ?>;
  }

  p, h2, h3, h4, h5, h6 {
    margin: 0;
    padding: 0;
  }

  #Schools {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    width:100%;
    text-align: center;
  }

  #Schools div:not(#WBHS):not(.innerBoxes) {
    float: none;
    display:inline-block;
    margin: 15px 8vw;
    width: 90vw;
    max-width: 450px;
    border: 1px dotted black;
    padding: 15px 5px;
    border-radius: 2px;
    background-color: <?php echo $scheme[0]; ?>;
    -webkit-transition: all .8s ease;
    -moz-transition: all .8s ease;
    -o-transition: all .8s ease;
    -ms-transition: all .8s ease;
    transition: all .8s ease;
  }

  #Schools div:hover:not(#WBHS):not(.innerBoxes) {
    transform: scale(1.01);
    box-shadow: 4px 4px 15px 1px #00000014;
  }

  @media screen and (max-width: 600px) {
    #Schools li {float: none;}
    #Schools div:not(.innerBoxes) {margin:15px 0px !important;}
  }

  #Schools #scores {
    padding: 15px 20px;
    width: fit-content;
    border-radius: 5px;
    background-color: orange;
    margin: 0px 5px;
  }

  h4 {
    font-weight: 450;
  }

  h3 {
    font-weight: 500;
  }

  h2 {
    font-size: 15px;
    font-weight: 400;
  }

  span {
    font-weight: 300;
  }

  #WBHS {
    text-align: left;
  }

  .innerBoxes {
    border: 1px black dashed;
    padding: 10px;
    border-radius: 20px;
    margin: 0px 25px;
  }

  #Schools i {
    padding: 5px;
  }

  #Schools i:hover {
    transform: scale(1) !important;
  }

  #summary-text {
    width: 90%;
    max-width:700px;
    text-align: left;
    font-weight: 400;
    font-size: 120%;
    line-height: 1.6;
  }

</style>


<script type="text/javascript">
  function SAT_Popup() {
    alert("[1] This is a combined score of the greater of the two scores.");
  }
</script>

<!-- to make the school boxes move based on mouse location

<script>
  $(document).on("mousemove", function(event){

  var $mouseX = event.pageX,
      $mouseY = event.pageY;

  $('#Schools').css("margin-top", - ($mouseY * 0.0125) + 'px');
  $('#Schools').css("margin-left", -($mouseX * 0.015) + 'px');

  });
</script>

-->

</head>

<div id="header">
  <?php include 'extras/header.php';?>
</div>

<body>
<div class="body-container">

  <Br>

<center>
  <h1>Education</h1>

  <h4 id="summary-text">
I started my high school career at William Byrd High School and I’ve worked very hard to build and maintain my current academic ranking. Over the four years in high school, I’ve completed numerous courses relevant to my future career goals. I’ve learned from these courses and created the path to become an engineer. I’ve learned and worked on the three major AutoDESK products, CAD, Revit and Inventor. Over the past four years, I’ve taught myself the ability to create and maintain amazing websites. I made my first website in 2013 and with help from the teachers and the community, I’ve greatly improved my knowledge and ability to code in HTML, PHP, Javascript, and CSS.<br><br>

After high school, I have continued my education in the engineering field, especially Computer Science, to learn the ability to create a piece of software that has the possibility to change someone’s life for the good in the future.
</h4>

  <br><br>

  <ul id="Schools">
    <center>

    <div class="school vt">
      <li>
        <img draggable="false" height="60px" src="<?php localDevEnvironment(); ?>/img/academics/VT.svg">
        <section style="font-size:xx-small;
        padding:5px 10px;
        transform:scale(.9);
        background-color:#8B1F41;
        color:white;
        width:fit-content;
        border-radius:15px;
        margin-top: -7px;">Currently Attending</section>
        <br>
        <h3 title="Virginia Polytechnic Institute and State University">Virginia Tech</h3>
        <h2><i class="fas fa-map-pin"></i> Blacksburg, VA</h2>
        <br>
        <span style="font-style: italic;"><i class="fas fa-calendar-week"></i> 2019 - Exp. 2022</span>
        <h2><i class="fas fa-graduation-cap"></i> Computer Science B.S.</h2>
      </li>
    </div>

    <div class="school vwcc">
      <li>
        <img draggable="false" height="60px" style="filter: invert(100%);transform: scale(0.8);" src="<?php localDevEnvironment(); ?>/img/academics/vwcc.png"><br><br>
        <h3>Virginia Western Community College</h3>
        <h2><i class="fas fa-map-pin"></i> Roanoke, VA</h2>
        <br>
        <span><i class="fas fa-calendar-week"></i> 2018 - 2019</span>
        <h2><i class="fas fa-graduation-cap"></i> Computer Science</h2>
      </li>
    </div>

    <div class="school byrd">
      <li>
        <img draggable="false" height="80px" src="<?php localDevEnvironment(); ?>/img/academics/byrd.png"><br><br>
        <h3>William Byrd High School</h3>
        <h2><i class="fas fa-map-pin"></i> Vinton, VA</h2>
        <br>
        <span><i class="fas fa-calendar-week"></i> 2014 - 2018</span>
        <h2><i class="fas fa-graduation-cap"></i> GPA: 3.27</h2>
        <br><br>
        <div class="innerBoxes">
          <h4>Certification:</h4>
            <div style="opacity:0;height: 10px;padding: 0;margin: 0 !important;"></div>
          <div id="WBHS">
            <ul>
              <li>AutoDESK - Design/Pre-Construction</li>
            </ul>
          </div>
        </div>
        <div style="opacity:0;height: 10px;padding: 0;margin: 0 !important;"></div>
          <div class="innerBoxes">
            <h4>Relevent Courses:</h4>
              <div style="opacity:0;height: 10px;padding: 0;margin: 0 !important;"></div>
            <div id="WBHS">
              <ul>
                <li>Engineering Drawing</li>
                <li>Architecture Design</li>
                <li>CAD Software/Computer-aided design</li>
                <li>Digital Photography</li>
              </ul>
            </div>
          </div>
          <div style="opacity:0;height: 10px;padding: 0;margin: 0 !important;"></div>
          <div class="innerBoxes" style="display:none;">
            <h4>Standardized Test Socores:</h4>
              <div style="opacity:0;height: 10px;padding: 0;margin: 0 !important;"></div>
            <div id="WBHS">
              <ul>
                <li><b>SAT: 1180 <sup style="cursor:pointer;font-size: 10px;" onclick="SAT_Popup()">[1]</sup></b></li>
                <ul style="opacity:0;height: 1.5%;"><li></li></ul>
                <ul><li>610 - Evidence-Based Reading and Writing</li></ul>
                <ul><li>570 - Math</li></ul>
              </ul>
            </div>
          </div>
      </li>
    </div>

    </center>
  </ul>

  <script>
    $('.school').tilt({
      maxTilt: 5,
      speed: 5000,    // Speed of the enter/exit transition.
      transition: true,   // Set a transition on enter/exit.
      scale: 1.005,
      perspective: 400,
      easing: "cubic-bezier(.03,.98,.52,.99)" // Easing on enter/exit.
  })
  </script>

</center>
<br><br><br>
<?php include 'extras/footer.php'; ?>
</div>
</body>
</html>
