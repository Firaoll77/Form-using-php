<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$City = $_POST["City"];
$phoneCode = $_POST["phoneCode"];
$phone = $_POST["phone"];

if (!empty($name) && !empty($email) && !empty($password) && !empty($gender) && !empty($phoneCode) && !empty($phone)&& !empty($City)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "form";

    // Create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
    } else {
        $SELECT = "SELECT email FROM register WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO register (name, password, gender, email, phoneCode, phone) VALUES (?, ?, ?, ?, ?, ?)";

        // Prepare statement for SELECT
        $stmt = $conn->prepare($SELECT);
        if (!$stmt) {
            die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare statement for INSERT
            $stmt = $conn->prepare($INSERT);
            if (!$stmt) {
                die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
            }

            $stmt->bind_param("ssssss", $name, $hashedPassword, $gender, $email, $phoneCode, $phone);
            if ($stmt->execute()) {
                echo "New record inserted successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Sorry !! <br> Someone has already registered using this email.";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
?>
