<?php

include 'class.php';
include '../krumo/class.krumo.php';

if (!isset($_GET['u'])) {
  header('location:index.php');
  exit;
}

$u = $_GET['u'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>DuoWidget</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body>
    <div id="main" class="container vertical-center">
      <div class="container main-content text-center col-md-6">
        <h1>Your widget preview:</h1></br>
        <p>Below is a preview of your widget.</br>Copy the code below to put it on your website or blog!</p></br>
        <iframe class="preview" src="widget.php?u=<?=$u?>"></iframe>

        <textarea class="code" readonly><iframe src="widget.php?u=<?=$u?>" frameborder="0" ></iframe></textarea>

      </div>
    </div>
  </body>
</html>
