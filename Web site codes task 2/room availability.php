<?php
include "config.php"; // Ensure this file contains your database connection details

$message = ""; // Variable to store the result message
$showBookNowButton = false; // Variable to control the visibility of the "Book Now" button

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];
    $roomType = $_POST['room-type'];

    // Query to check for available rooms
    $sql = "SELECT * FROM rooms WHERE room_type='$roomType' AND is_available=1 LIMIT 1";
    $result = $conn->query($sql);


    // Check if the query executed successfully
    if ($result === false) {
        $message = "Query failed: " . $conn->error;
    } else {
        // Check if a room is available
        if ($result->num_rows > 0) {
            $message = "Room is available.";
            $showBookNowButton = true; // Show the "Book Now" button
        } else {
            $message = "Room is unavailable.";
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Availability</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, rgb(227, 204, 114), #2575fc);
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 80px; /* Add margin to avoid overlap with navbar */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="date"], input[type="text"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }

        .book-now-button {
            margin-top: 20px;
            background-color: #2575fc;
            color: white;
        }

        .book-now-button:hover {
            background-color: #1a5bbf;
        }
    </style>
</head>
<body>
    
    <!-- Room Availability Form -->
    <div class="container">
        <h1>Check Room Availability</h1>
        <form id="availability-form" method="POST" action="">
    <div class="form-group">
        <label for="check-in">Check-in Date:</label>
        <input type="date" id="check-in" name="check-in" required>
    </div>
    <div class="form-group">
        <label for="check-out">Check-out Date:</label>
        <input type="date" id="check-out" name="check-out" required>
    </div>
    <div class="form-group">
        <label for="room-type">Room Type:</label>
        <select id="room-type" name="room-type" required>
            <option value="single">Single Room</option>
            <option value="double">Double Room</option>
            <option value="suite">Suite</option>
        </select>
    </div>
    <button type="submit">Check Availability</button>
</form>

        <!-- Display the result message -->
        <?php if (!empty($message)): ?>
            <div class="message">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <!-- Display the "Book Now" button if a room is available -->
        <?php if (($showBookNowButton)): ?>
            <button class="book-now-button" onclick="window.location.href='roombook.php'">Book Now</button>
        <?php endif; ?>
    </div>
</body>
</html>