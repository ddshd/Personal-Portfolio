<?php
if (!file_exists("resume.pdf")) {
  header("HTTP/1.0 404 Not Found");
  header("Location: 404");
  exit();
}
$filename = "resume.pdf";
$tempFileName = str_replace(explode("/", $_SERVER["PHP_SELF"])[sizeof(explode("/", $_SERVER["PHP_SELF"])) - 1], "", $_SERVER["PHP_SELF"])
  . $filename;

if (isset($_GET["download"])) {
  header("Content-type: application/pdf");
  header("Content-type: application/pdf");
  header('Content-Disposition: attachment; filename="Dhrumil-Shah-Resume.pdf"');
  header("Content-Length: " . filesize($filename));
  readfile($filename);
}
?>

<html>

<head>
  <?php $title = "Resume"; ?>
  <?php include 'extras/meta.php'; ?>

  <?php function descriptionTag()
  {
    echo "My Resume.";
  }  ?>
  <?php
  $scheme0 = ['#e88565', '#181a27'];
  $scheme = ['#0f0a04', '#faac01'];
  ?>
  <?php include 'extras/noscript.php'; ?>
  <style>
    html {
      background-color: <?php echo $scheme[0]; ?>;
      margin: 0;
      color: <?php echo $scheme[1]; ?>;
      padding: 0px 30px;
    }

    a,
    a:hover,
    a:visited,
    a:active {
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

    canvas {
      pointer-events: none;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      max-width: 1000px;
      width: 70vw;
      border: 5px solid #fbab01;
      direction: ltr;
      border-radius: 5px;
    }
  </style>

</head>

<div id="header">
  <?php include 'extras/header.php'; ?>
</div>

<body>

  <div class="body-container">
    <center>
      <ul id="BodyLinks">

        <div id="download">
          <li> <a href="<?php
                        echo '?download=nsa_allowed'; ?>">
              <i class="fas fa-cloud-download-alt"></i> Download
            </a>
          </li>

      </ul>

      <canvas class="shadow-lg p-3 mb-5 bg-white rounded" id="the-canvas"></canvas>
  </div>
  </center>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <script id="script">
    try {
      var url = '<?php echo $tempFileName ?>';
      pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js';
      var loadingTask = pdfjsLib.getDocument(url);
      loadingTask.promise.then(function(pdf) {
        pdf.getPage(1).then(function(page) {
          var scale = 1.5;
          var viewport = page.getViewport({
            scale: scale,
          });
          var canvas = document.getElementById('the-canvas');
          var context = canvas.getContext('2d');
          canvas.height = viewport.height;
          canvas.width = viewport.width;
          var renderContext = {
            canvasContext: context,
            viewport: viewport,
          };
          page.render(renderContext);
        });
      });
    } catch (err) {
      var html = "This device doesn't correctly support displaying a PDF.";
      document.getElementById("download").innerHTML = html;
    }
  </script>

  <br>
  <br>
  </div>
</body>

</html>