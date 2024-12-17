<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // Display submitted data
    echo "<div class='container'>";
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Age:</strong> " . htmlspecialchars($age) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>Country:</strong> " . htmlspecialchars($country) . "</p>";
    echo "<p><strong>Address:</strong> " . htmlspecialchar($Address) ." </p>";
    echo "</div>";
}
?>
