<?php
  if (!file_exists("resume.pdf")) {
      header("HTTP/1.0 404 Not Found");
      header("Location: 404");
      exit();
  }
?>

<html>
<head>
  <?php  $title = "Resume"; ?>
  <?php include 'extras/meta.php';?>

  <?php function descriptionTag() { echo "My Resume."; }  ?>
  <?php
        $scheme0 = ['#e88565', '#181a27'];
        $scheme = ['#0f0a04', '#faac01'];
  ?>
  <?php include 'extras/noscript.php';?>
<style>
    html {
      background-color: <?php echo $scheme[0]; ?>;
      margin: 0;
      color: <?php echo $scheme[1]; ?>;
      padding: 0px 30px;
    }

    a, a:hover, a:visited, a:active {
      color: <?php echo $scheme[1]; ?> !important;
      cursor: pointer !important;
    }

    * {
      cursor: inherit;
    }

    #ObjectHidden {
        display: none;
    }

    @media screen and (max-width: 750px) {
      object {
          display: none;
      }

      #ObjectHidden {
          display: block;
      }
    }
</style>

</head>
<body>

<div class="body-container">

<center>

<span>
    <a href="javascript:history.back()"><h2><i class="fas fa-long-arrow-alt-left"></i> Back</h2></a>
    <a href="<?php localDevEnvironment(); echo '/resume.pdf#view=FitV&pagemode=none&toolbar=0&statusbar=1&messages=0&navpanes=0';?>"><h2><i class="fas fa-cloud-download-alt"></i> Download</h2></a>
</span>

    <p>Use the contact button on the homepage to get access to the full resume with my contact information.</p>

    <object
        data='<?php localDevEnvironment(); echo '/resume.pdf#view=FitV&pagemode=none&toolbar=0&statusbar=1&messages=0&navpanes=0';?>'
        type='application/pdf'
        width='100%'
        height='100%'>
            <p>This browser does not support inline PDFs. Please download the PDF to view it.</p>
    </object>

    <p id="ObjectHidden">This browser does not support inline PDFs. Please download the PDF to view it.</p>

</center>

<br>
<br>

<?php include 'extras/footer.php'; ?>

<br>
</div>
</body>
</html>
