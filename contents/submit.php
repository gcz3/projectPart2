<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Submit - UNIEL[st] ver.3.10 Frame Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <link rel="stylesheet" type="text/css" href="../css/submit.css">
  </head>
  <body>
    <?php include('../includes/header.php') ?>

    <br><br>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "cs1550_project";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
      }

      $name = $conn->real_escape_string($_POST['name']);
      $email = $conn->real_escape_string($_POST['email']);
      $subject = $conn->real_escape_string($_POST['subject']);
      $message = $conn->real_escape_string($_POST['message']);

      $sql = "INSERT INTO contact_form_responses (name, email, subject, message)
      VALUES ('" . $name . "', '" . $email . "','" . $subject . "','" . $message . "')";

      if ($conn->query($sql) === TRUE) {
        echo "<h1>Form successfully sent!</h1><br>";
      } else {
        echo "<h1>Error: " . $sql . "</h1><br>" . $conn->error;
      }

      $conn->close();
     ?>

     <?php include('../includes/footer.php') ?>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
