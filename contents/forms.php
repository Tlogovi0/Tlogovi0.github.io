<h2>Welcome to my forms</h2>

<!-- First Form -->
<form action="" method="post">
  <h2>Form 1 - Contact Information</h2>
  Name: <input type="text" name="name1"><br>
  Email: <input type="email" name="email1"><br>
  <input type="submit" value="Submit Form 1">
</form>

<hr>

<!-- Second Form -->
<form action="" method="post">
  <h2>Form 2 - Product Inquiry</h2>
  Product Name: <input type="text" name="product_name2"><br>
  Quantity: <input type="number" name="quantity2" min="1"><br>
  <input type="submit" value="Submit Form 2">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['name1']) && isset($_POST['email1'])) {
    // Processing Form 1
    $name1 = $_POST['name1'];
    $email1 = $_POST['email1'];
    echo "<h3>Form 1 Results</h3>";
    echo "Name: " . $name1 . "<br>";
    echo "Email: " . $email1 . "<br>";
  }

  if (isset($_POST['product_name2']) && isset($_POST['quantity2'])) {
    // Processing Form 2
    $product_name2 = $_POST['product_name2'];
    $quantity2 = $_POST['quantity2'];
    echo "<h3>Form 2 Results</h3>";
    echo "Product Name: " . $product_name2 . "<br>";
    echo "Quantity: " . $quantity2 . "<br>";
  }
}
?>
