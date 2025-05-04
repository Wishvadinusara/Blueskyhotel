<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Booking - Blue Sky Hotel</title>
    <style>
        body {
            background-image: url("https://images.pexels.com/photos/1458457/pexels-photo-1458457.jpeg?cs=srgb&dl=pexels-jimbear-1458457.jpg&fm=jpg");
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 0 auto;
        }
        label, input, select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <u><h1 style="font-size:300%;">Rooms & Booking</h1></u>
    <h1>Welcome to Blue Sky Hotel Management System!</h1>

   

    <hr>

    <h1>Book a Room</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="room_type">Room Type:</label>
        <select id="room_type" name="room_type" required>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Suite">Suite</option>
        </select>

        <label for="check_in">Check-in Date:</label>
        <input type="date" id="check_in" name="check_in" required>

        <label for="check_out">Check-out Date:</label>
        <input type="date" id="check_out" name="check_out" required>

        <input type="submit" value="Book Now">
    </form>
</body>
</html>