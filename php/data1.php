<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
  header('Location: admission_form.php');
  exit();
}

// Check if user submitted the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate user's credentials (you will need to implement this yourself)
  if (validate_user($username, $password)) {
    $_SESSION['username'] = $username;
    header('Location: admission_form.php');
    exit();
  } else {
    $error_msg = "Invalid username or password. Please try again.";
  }
}


function validateForm() {
    var username = document.forms[0]["username"].value;
    var password = document.forms[0]["password"].value;
    if (username == "" || password == "") {
      alert("Please fill in all fields");
      return false;
    }
  }
  