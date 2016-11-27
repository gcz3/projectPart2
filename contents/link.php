<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Links - UNIEL[st] ver.3.10 Frame Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <link rel="stylesheet" type="text/css" href="../css/link.css">
    <script src="../js/theme.js"></script>
  </head>
  <body>
    <?php include('../includes/header.php') ?>

    <h1>Links</h1>

    <br>

    <?php
      echo "<ul id=\"listOfLinks\">";

      $link = array(
        "Offical Site"            =>  "http://www.arcsystemworks.jp/unist/",
        "Players Guild"           =>  "http://sp.uniac.jp/",
        "Japanese Wiki"           =>  "http://www18.atwiki.jp/un_inbirth/",
        "Japanese Frame Data PDF" =>  "https://drive.google.com/file/d/0B0n6SaJ2vGV3YUItdkEzZjc3bWs/view",
        "English Wiki"            =>  "http://wiki.mizuumi.net/w/Under_Night_In-Birth"
      );

      foreach ($link as $key => $website) {
        echo "<li>
                <a href=\"" . $website . "\" target=\"_blank\">" . $key . "</a>
              </li>
              <br>";
      }

      echo "</ul>";
    ?>

    <?php include('../includes/footer.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
