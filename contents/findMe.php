<?php
session_start();

// Check if user is logged in
function check_login() {
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
}

// Logout function
function logout() {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Include database connection
require_once "db_connection.php";

// Function to create review table
function create_review_table($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS review (
        id INT AUTO_INCREMENT PRIMARY KEY,
        userid INT,
        houseid INT,
        priority INT,
        review TEXT,
        due_date DATE,
        edited BOOLEAN DEFAULT 0,
        FOREIGN KEY (userid) REFERENCES users(id),
        FOREIGN KEY (houseid) REFERENCES houses(id)
    )";
    $conn->exec($sql);
}

// Function to handle form submission to add new house
function add_house($conn, $address, $price, $square_footage, $bedrooms, $bathrooms, $notes) {
    $sql = "INSERT INTO houses (address, price, square_footage, bedrooms, bathrooms, notes) 
            VALUES (:address, :price, :square_footage, :bedrooms, :bathrooms, :notes)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':square_footage', $square_footage);
    $stmt->bindParam(':bedrooms', $bedrooms);
    $stmt->bindParam(':bathrooms', $bathrooms);
    $stmt->bindParam(':notes', $notes);
    $stmt->execute();
}

// Function to handle form submission to add new review
function add_review($conn, $userid, $houseid, $priority, $review, $due_date) {
    $sql = "INSERT INTO review (userid, houseid, priority, review, due_date) 
            VALUES (:userid, :houseid, :priority, :review, :due_date)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userid', $userid);
    $stmt->bindParam(':houseid', $houseid);
    $stmt->bindParam(':priority', $priority);
    $stmt->bindParam(':review', $review);
    $stmt->bindParam(':due_date', $due_date);
    $stmt->execute();
}

// Function to handle form submission to update review
function update_review($conn, $id, $review, $due_date) {
    $sql = "UPDATE review SET review = :review, due_date = :due_date, edited = 1 WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':review', $review);
    $stmt->bindParam(':due_date', $due_date);
    $stmt->execute();
}

// Function to handle form submission to delete review
function delete_review($conn, $id) {
    $sql = "DELETE FROM review WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

// Function to display list of houses
function display_houses($conn) {
    $sql = "SELECT * FROM houses";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $houses = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display houses in a table
    echo "<table>";
    echo "<tr><th>ID</th><th>Address</th><th>Price</th><th>Square Footage</th><th>Bedrooms</th><th>Bathrooms</th><th>Notes</th></tr>";
    foreach ($houses as $house) {
        echo "<tr>";
        echo "<td>" . $house['id'] . "</td>";
        echo "<td>" . $house['address'] . "</td>";
        echo "<td>" . $house['price'] . "</td>";
        echo "<td>" . $house['square_footage'] . "</td>";
        echo "<td>" . $house['bedrooms'] . "</td>";
        echo "<td>" . $house['bathrooms'] . "</td>";
        echo "<td>" . $house['notes'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Function to display list of reviews
function display_reviews($conn) {
    $sql = "SELECT * FROM review";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display reviews in a table
    echo "<table>";
    echo "<tr><th>ID</th><th>User ID</th><th>House ID</th><th>Priority</th><th>Review</th><th>Due Date</th><th>Edited</th></tr>";
    foreach ($reviews as $review) {
        echo "<tr>";
        echo "<td>" . $review['id'] . "</td>";
        echo "<td>" . $review['userid'] . "</td>";
        echo "<td>" . $review['houseid'] . "</td>";
        echo "<td>" . $review['priority'] . "</td>";
        echo "<td>" . $review['review'] . "</td>";
        echo "<td>" . $review['due_date'] . "</td>";
        echo "<td>" . ($review['edited'] ? 'Yes' : 'No') . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
