<?php
$con = new mysqli("localhost", "root", "", "text");

// Check if connection to MySQL is successful
if ($con->connect_error) {
    die("Failed to connect to MySQL: " . $con->connect_error);
}

// Get form data from $_POST
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$dob = $_POST["dob"];
$aadhaar = $_POST["aadhaar"];

// Prepare SQL query with placeholders
$sql = "INSERT INTO `studentdata` (`firstname`, `middlename`, `lastname`, `email`, `contact`, `address`, `aadhaar`, `dob`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare statement with SQL query
$stmt = $con->prepare($sql);

// Bind parameters to placeholders
$stmt->bind_param("ssssssss", $firstname, $middlename, $lastname, $email, $contact, $address, $aadhaar, $dob);

// Execute statement
if ($stmt->execute()) {
    echo "New record created successfully.";

    // Get the last inserted ID
    $last_id = $stmt->insert_id;

    // Upload and save image file (if it's included in the form submission)
    if (!empty($_FILES["image"]["name"])) {
        // Define target directory and file name
        $targetDir = "images/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        // Get file type
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow only certain file types
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (!in_array($fileType, $allowTypes)) {
            echo 'Error: Only JPG, JPEG, and PNG files are allowed to upload.';
        } else {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Update image file name in the database for the last inserted record
                $stmt = $con->prepare("UPDATE `studentdata` SET `image` = ? WHERE `uid` = ?");
                $stmt->bind_param("si", $fileName, $last_id);
                if ($stmt->execute()) {
                    echo 'The file ' . $fileName . ' has been uploaded successfully.';
                } else {
                    echo 'Error: Failed to update the image file name in the database.';
                }
            } else {
                echo 'Error: Failed to upload the file to the server.';
            }
        }
    }
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$con->close();
