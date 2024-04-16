<h2> forms</h2>

<!-- Form with method POST -->
<form action="" method="post">
  <h2>Rate Our Company (POST)</h2>
  <label for="name_post">Your Name:</label>
  <input type="text" name="name_post" id="name_post" required><br>

  <label for="rating_post">Rating:</label>
  <select name="rating_post" id="rating_post">
    <option value="5">Excellent</option>
    <option value="4">Very Good</option>
    <option value="3">Good</option>
    <option value="2">Fair</option>
    <option value="1">Poor</option>
  </select><br>

  <input type="submit" value="Submit Rating (POST)">
</form>

<!-- Form with method GET -->
<form action="" method="get">
  <h2>Rate Our Company (GET)</h2>
  <label for="name_get">Your Name:</label>
  <input type="text" name="name_get" id="name_get" required><br>

  <label for="rating_get">Rating:</label>
  <select name="rating_get" id="rating_get">
    <option value="5">Excellent</option>
    <option value="4">Very Good</option>
    <option value="3">Good</option>
    <option value="2">Fair</option>
    <option value="1">Poor</option>
  </select><br>

  <input type="submit" value="Submit Rating (GET)">
</form>

<hr/>

<?php
// Process Form with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name_post']) && isset($_POST['rating_post'])) {
  // Retrieve and process form data
  $name_post = $_POST['name_post'];
  $rating_post = $_POST['rating_post'];

  // Display processed data
  echo "<h3>Thank You for Your Rating!</h3>";
  echo "<p>Your Name: $name_post</p>";
  echo "<p>Rating: $rating_post</p>";
}

// Process Form with GET method
elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name_get']) && isset($_GET['rating_get'])) {
  // Retrieve and process form data
  $name_get = $_GET['name_get'];
  $rating_get = $_GET['rating_get'];

  // Display processed data
  echo "<h3>Thank You for Your Rating!</h3>";
  echo "<p>Your Name: $name_get</p>";
  echo "<p>Rating: $rating_get</p>";
}
?>
