
<?php
// Retrieve data from form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Check if all fields are filled in
if (empty($email) || empty($password)) {
  echo "Both email and password are required.";
  exit();
}

// Open the CSV file
$file = fopen('data.csv', 'r');

// Check if the data already exists in the CSV file
$matched = false;
while (($data = fgetcsv($file)) !== false) {
  if ($data[0] == $email && $data[1] == $password) {
    $firstName = $data[2];
    $matched = true;
    break;
  }
}

// Close the file
fclose($file);

if ($matched) {
  // Redirect to welcome.php with the first name parameter
  header("Location: wellcome.php?firstName=" . urlencode($firstName));
  exit;
} else {
  // Redirect back to index.php with error message
  $error_message = "Invalid email or password. Please try again.";
  header("Location: index.php?error_message=" . urlencode($error_message));
  exit();
}
?>