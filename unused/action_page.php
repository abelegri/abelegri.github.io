<?php
// define variables and set to empty values
$nameErr = $emailErr = $messgaeErr = $subjectErr = "";
$name = $email = $message = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["subject"])) {
    $subject = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }
}
?>

<html>
<body>

Thank you, <?php echo $_POST["fname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
Alexa will get back to you within 2 business days.

</body>
</html>

