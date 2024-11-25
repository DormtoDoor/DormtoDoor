<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $student_name = $_POST["student_name"];
    $student_id = $_POST["student_id"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $current_address = $_POST["current_address"];
    $next_address = $_POST["next_address"];
    $num_boxes = $_POST["num_boxes"];
    $moving_date = $_POST["moving_date"];

    try {
        require_once "dtdmc.php";
        $query = "INSERT INTO users(student_name, student_id, email, phone, current_address, next_address, num_boxes, moving_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$student_name, $student_id, $email, $phone, $current_address, $next_address, $num_boxes, $moving_date]);
        $pdo = null;
        $stmt = null;

        die(header("location: ../landingPage.html"));
    } catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../movingForm.html");
}

