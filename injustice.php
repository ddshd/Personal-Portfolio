<?php ?>
<html>

<head>
  <?php $title = "No Justice, No Peace."; ?>
  <?php include 'extras/meta.php'; ?>

  <?php function descriptionTag()
  {
    echo "Fight against injustice and police brutality.";
  }  ?>

  <?php
  $scheme0 = ['#e88565', '#181a27'];
  $scheme = ['#0f0a04', '#ffd500'];
  ?>

  <?php include 'extras/noscript.php'; ?>
  <style>
    html {
      background-color: <?php echo $scheme[0]; ?>;
      margin: 0;
      color: <?php echo $scheme[1]; ?>;
      background-image: url(<?php echo '"';
                            echo localDevEnvironment();
                            echo '/img/injustice/fist.png"'; ?>);
      background-repeat: repeat center;
      background-size: 100px;
    }

    p,
    h1,
    h2 {
      text-shadow: 2px 2px 10px <?php echo $scheme[0]; ?>;
    }

    h1 {
      font-size: 100;
    }

    button {
      background-color: <?php echo $scheme[1]; ?>;
      border: 0px;
      padding: 10px 15px;
      cursor: pointer;
    }
  </style>

</head>

<body>
  <div class="body-container">

    <center>
      <h1>No Justice, no peace.</h1>
      <p style="max-width:800px;width:90vw;text-align:left;">
        Injustice and acts of police brutality blanketing the country are intolerable. It is a disgrace that systematic racism is something we still have to fight against in 2020, however, we will not stop fighting until everybody is treated equally. We must make this change together.
      </p>

      <br>
      <br>

      <p style="max-width:800px;width:90vw;text-align:left;">
        There are many ways to help fight the injustice embedded within our system. Donate to any of the hundreds of organizations working to create or change legislation and policies, including defunding wasteful spending and spending it on training and programs to ensure police departments around the US are properly trained to see through the color of a person's skin.
      </p>

      <h2 style="max-width:800px;width:90vw;text-align:center;">
        Vote out the “bad apples"
      </h2>

      <p style="max-width:800px;width:90vw;text-align:left;">
        Voting is one of the best ways to ensure change is going to get made. Consider registering to vote and make an effort to participate in your local and national elections.
      </p>

      <form action="https://vote.gov" method="get" target="_blank">
        <button type="submit">Register to Vote.</button>
      </form>

      <br>
      <br>
      <br>
      <br>
      <br>

      <form action="<?php echo localDevEnvironment();
                    echo '/' ?>" method="get" target="_self">
        <button type="submit">Home</button>
      </form>
    </center>

    <?php include 'extras/footer.php'; ?>
  </div>
</body>

</html>