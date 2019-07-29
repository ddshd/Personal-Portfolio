
  <style>

  html, body {
    background-color: #c42922;
    color: white;
    font-family: 'Arial', 'Sans-serif';
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    padding: 0;
    margin: 0;
    position: relative;

  }

  button {
    border: none;
    padding: 10px 15px;
    background-color: white;
    color: black;
    border-radius: 20px;
    cursor: pointer;
  }

  a, a:hover, a:visited, a:active {
    text-decoration: none;
    color: inherit;
  }

  center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 85%;
  }

  h1 {
    font-size: 25vw;
    opacity: .1;
    padding:0;
    margin:0;
  }

  h3 {
    font-weight: lighter;
  }

  * {
    cursor: inherit;
    }

  </style>

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name = "viewport" content = "width = device-width">

  <center>
    <h1><?php echo $_SERVER['QUERY_STRING'];?></h1>
    <h3>It seems that we have hit an error. Please check the URL or try again using the links below.</h3>
    <a href="javascript:history.back()"><button>Go Back</button></a>
    <a href="/"><button>Home</button></a>
  </center>
