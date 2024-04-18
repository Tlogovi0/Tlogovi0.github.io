<h2> forms</h2>

<!-- Form with method POST -->
<form action="" method="post">
  <h2>Customer Information</h2>
  <label for="first_name">First Name:</label>
  <input type="text" name="first_name" id="first_name" required><br>

  <label for="last_name">Last Name:</label>
  <input type="text" name="last_name" id="last_name" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br>

  <label for="message">Message:</label><br>
  <textarea name="message" id="message" rows="4" cols="50"></textarea><br>

  <label for="discovery">How did you discover us?</label>
  <select name="discovery" id="discovery">
    <option value="search_engine">Search Engine</option>
    <option value="social_media">Social Media</option>
    <option value="word_of_mouth">Word of Mouth</option>
    <option value="advertisement">Advertisement</option>
    <option value="other">Other</option>
  </select><br>

  <label for="rating">Rate Home Paradise (1-5):</label>
  <input type="number" name="rating" id="rating" min="1" max="5" required><br>

  <input type="submit" value="Submit (POST)">
</form>

<!-- Form with method GET -->
<form action="" method="get">
  <h2>Customer Information </h2>
  <label for="first_name">First Name:</label>
  <input type="text" name="first_name" id="first_name" required><br>

  <label for="last_name">Last Name:</label>
  <input type="text" name="last_name" id="last_name" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br>

  <label for="message">Message:</label><br>
  <textarea name="message" id="message" rows="4" cols="50"></textarea><br>

  <label for="discovery">How did you discover us?</label>
  <select name="discovery" id="discovery">
    <option value="search_engine">Search Engine</option>
    <option value="social_media">Social Media</option>
    <option value="word_of_mouth">Word of Mouth</option>
    <option value="advertisement">Advertisement</option>
    <option value="other">Other</option>
  </select><br>

  <label for="rating">Rate Home Paradise (1-5):</label>
  <input type="number" name="rating" id="rating" min="1" max="5" required><br>

  <input type="submit" value="Submit (GET)">
  <input type="hidden" name="p" value="../contents/forms.php">
</form>

<hr/>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['discovery']) && isset($_POST['rating'])) {
  // Retrieve and process form data
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $discovery = $_POST['discovery'];
  $rating = $_POST['rating'];

  // Display processed data
  echo "<h3>POST Method Results</h3>";
  echo "<p>First Name: $first_name</p>";
  echo "<p>Last Name: $last_name</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Message: $message</p>";
  echo "<p>How did you discover us? $discovery</p>";
  echo "<p>Rating: $rating</p>";
}

elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['email']) && isset($_GET['message']) && isset($_GET['discovery']) && isset($_GET['rating'])) {
  // Retrieve and process form data
  $first_name = $_GET['first_name'];
  $last_name = $_GET['last_name'];
  $email = $_GET['email'];
  $message = $_GET['message'];
  $discovery = $_GET['discovery'];
  $rating = $_GET['rating'];

  // Display processed data
  echo "<h3>GET Method Results</h3>";
  echo "<section>";
        echo "<h4>Submission completed,$first_name!</h4>";
        echo "<p>Thanks for choosing us. </p>";
        echo "</section>";
        
}
 <h2>Home Selling Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
        
        <label for="property_type">Property Type:</label>
        <select id="property_type" name="property_type" required>
            <option value="">Select</option>
            <option value="house">House</option>
            <option value="apartment">Apartment</option>
            <option value="condo">Condo</option>
        </select><br><br>
        
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" required><br><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
        
        <label for="pets">Pets:</label>
        <input type="checkbox" id="dog" name="pets[]" value="dog">
        <label for="dog">Dog</label>
        <input type="checkbox" id="cat" name="pets[]" value="cat">
        <label for="cat">Cat</label><br><br>
        
        <label for="image">Image:</label>
        <input type="file" id="image" name="image"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Form Results:</h2>";
        echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
        echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
        echo "Phone: " . htmlspecialchars($_POST["phone"]) . "<br>";
        echo "Property Type: " . htmlspecialchars($_POST["property_type"]) . "<br>";
        echo "Price: $" . htmlspecialchars($_POST["price"]) . "<br>";
        echo "Description: " . htmlspecialchars($_POST["description"]) . "<br>";
        if (!empty($_POST["pets"])) {
            echo "Pets: " . implode(", ", $_POST["pets"]) . "<br>";
        } else {
            echo "Pets: None<br>";
        }
        // Process image upload if needed
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['image']['tmp_name'];
            $name = basename($_FILES['image']['name']);
            move_uploaded_file($tmp_name, "uploads/$name");
            echo "Image uploaded successfully.";
        }
    }
    ?>
