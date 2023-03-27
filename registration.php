<?php
  // Retrieve data from form submission
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  // Check if all fields are filled in
  if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
    echo "All fields are required.";
    exit();
  }

  // Check if email is in valid format
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit();
  }

  // Check if password and confirm password fields match
  if($password !== $confirmPassword) {
    echo "Password and confirm password fields must match.";
    exit();
  }

// Open the CSV file
$file = fopen('data.csv', 'a');

// Write the data to the file
fputcsv($file, [$firstName,$lastName,$email,$password,$confirmPassword]);

// Close the file
fclose($file);
  // If all validation passes, Display the Successfully Registered Message
  echo "Sucessfully Registered";