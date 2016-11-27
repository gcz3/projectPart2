<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Hilda Frame Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <link rel="stylesheet" type="text/css" href="../css/frame_data.css">
    <script src="../js/theme.js"></script>
  </head>
  <body>
    <?php include('../includes/header.php') ?>

    <?php
      include('../includes/frame_data_table.php');
      createFrameDataTable("Hilda", "hilda_frame_data");
    ?>

    <?php include('../includes/footer.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
