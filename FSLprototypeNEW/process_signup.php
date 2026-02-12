<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "fsldb";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    
    $profile_picture = null;
    if (!empty($_POST['profile_picture'])) {
        $profile_picture = $_POST['profile_picture'];
    }

    if ($role === 'student') {
        $grade = mysqli_real_escape_string($conn, $_POST['grade']);

        if ($profile_picture) {
            $sql = "INSERT INTO account_record (name, grade, contact, address, email, password, role, profile_picture) 
                    VALUES ('$name', '$grade', '$contact', '$address', '$email', '$password', '$role', '$profile_picture')";
        } else {
            $sql = "INSERT INTO account_record (name, grade, contact, address, email, password, role) 
                    VALUES ('$name', '$grade', '$contact', '$address', '$email', '$password', '$role')";
        }
    } else if ($role === 'teacher') {
        if ($profile_picture) {
            $sql = "INSERT INTO account_record (name, email, password, role, profile_picture) 
                    VALUES ('$name', '$email', '$password', '$role', '$profile_picture')";
        } else {
            $sql = "INSERT INTO account_record (name, email, password, role) 
                    VALUES ('$name', '$email', '$password', '$role')";
        }
    }
    
    if (mysqli_query($conn, $sql)) {
        header("Location: login.php?success=Signup successful! You can now log in.");
        exit();
    } else {
        header("Location: signup.php?error=Error: " . mysqli_error($conn));
        exit();
    }
}

mysqli_close($conn);
?>
