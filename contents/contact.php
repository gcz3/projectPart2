<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contact - UNIEL[st] ver.3.10 Frame Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <script src="../js/theme.js"></script>
  </head>
  <body>
    <?php include('../includes/header.php') ?>

    <h1>Contact Us</h1>

    <br>

    <p>
      Please fill out the form below.

      <br>

      * indicates required field
    </p>

    <form action="submit" method="post" id="contactForm">
      <div class="form-group">
        <label for="i_name">Name:</label>
        <input type="text" class="form-control" id="i_name" name="name">
      </div>

      <div class="form-group" id="emailField">
        <label for="i_email">Email:*</label>
        <input type="email" class="form-control" id="i_email" name="email">
      </div>

      <div class="form-group">
        <label for="i_subject">Subject:</label>
        <input type="text" class="form-control" id="i_subject" name="subject">
      </div>

      <div class="form-group" id="messageField">
        <label for="i_message">Message:*</label>
        <textarea class="form-control" id="i_message" rows="10" name="message"></textarea>
      </div>

      <button type="submit" class="btn">Submit</button>
    </form>

    <?php include('../includes/footer.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/contact.js"></script>
  </body>
</html>
