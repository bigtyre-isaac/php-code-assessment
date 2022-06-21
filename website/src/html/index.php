<?php
require_once __DIR__ . '/init.php';

ob_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/site.css" />
  </head>
  <body>
    <?php include __DIR__ . '/survey-followup-form.php';?>
  </body>
</html>

<?php
ob_end_flush();
?>