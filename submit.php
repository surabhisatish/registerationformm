<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = htmlspecialchars($_POST['name']);
  $dob = htmlspecialchars($_POST['dob']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $address = htmlspecialchars($_POST['address']);

  // Display the data in the new format
  echo "<div style='text-align: left; padding: 20px; border: 2px solid #d943aa; background-color: #ffe6f0; border-radius: 10px;'>";
  echo "<h2 style='color: #d943aa;'>🎉 Registration Details 🎉</h2>";
  echo "<p><strong>Full Name:</strong> $name</p>";
  echo "<p><strong>Date of Birth:</strong> $dob</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Phone Number:</strong> $phone</p>";
  echo "<p><strong>Gender:</strong> $gender</p>";
  echo "<p><strong>Address:</strong> $address</p>";
  echo "</div>";
}
?>
