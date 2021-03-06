<?php

include 'class.php';
include '../krumo/class.krumo.php';

if (!isset($_GET['u'])) {
  header('location:index.php');
  exit;
}

$duoWidget = new DuoWidget;
$userData = $duoWidget->get_stats($_GET['u']);

?>
<!DOCTYPE html>
<html>
<head>
  <title>DuoWidget</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="widget.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body>
    <div class="main-container">
      <div class="avatar">
        <img src="<?php print $userData['avatar']?>/xlarge">
      </div>
      <div class="details">
        <h1 class="name"><?php print $userData['username']; ?></h1>
        <p class="desc"><i>"<?php print $userData['bio']; ?>"</i></p>
        <p><?php print $userData['streak']; ?> Day Streak</p>
      </div>
    </div>
  </body>
</html>
