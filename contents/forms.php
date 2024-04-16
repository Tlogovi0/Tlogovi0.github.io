<!-- Form with method POST -->
<form action="" method="post">
  <!-- Add fields here -->
  <input type="submit" value="Submit (POST)">
</form>

<!-- Form with method GET -->
<form action="" method="get">
  <!-- Add fields here -->
  <input type="submit" value="Submit (GET)">
</form>

<?php
// Processing form data with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve and process form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  // Output processed data
  echo "POST Method Results:<br>";
  echo "First Name: " . $firstname . "<br>";
  echo "Last Name: " . $lastname . "<br>";
}
?>

<hr/>

<?php
// Processing form data with GET method
if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
  // Retrieve and process form data
  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];

  // Output processed data
  echo "GET Method Results:<br>";
  echo "First Name: " . $firstname . "<br>";
  echo "Last Name: " . $lastname . "<br>";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Processing form data with POST method
  // Retrieve and process form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  // Output processed data
  echo "POST Method Results:<br>";
  echo "First Name: " . $firstname . "<br>";
  echo "Last Name: " . $lastname . "<br>";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname']) && isset($_GET['lastname'])) {
  // Processing form data with GET method
  // Retrieve and process form data
  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];

  // Output processed data
  echo "GET Method Results:<br>";
  echo "First Name: " . $firstname . "<br>";
  echo "Last Name: " . $lastname . "<br>";
}
?>
