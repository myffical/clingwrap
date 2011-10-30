<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo($title) ?></title>
</head>
<body>
<?php $this->render('bar') ?>
<h1><?php echo($content) ?></h1>
<?php $this->render('action') ?>
</body>
</html>