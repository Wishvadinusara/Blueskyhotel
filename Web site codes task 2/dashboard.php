<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System - Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
}

.dashboard {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
}

.sidebar h2 {
    text-align: center;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
}

.main-content {
    flex-grow: 1;
    background-color: #ecf0f1;
    padding: 20px;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.user-info {
    display: flex;
    align-items: center;
}

.user-info span {
    margin-right: 10px;
}

.stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.stat-card {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    width: 30%;
}

.content-section {
    margin-bottom: 40px;
}

.room-list {
    display: flex;
    flex-wrap: wrap;
}

.room-list div {
    background-color: white;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
    width: 200px;
    text-align: center;
}

button {
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}</style>
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <h2>Hotel Admin</h2>
            <ul>
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="./roomdash.php">Room Management</a></li>
                <li><a href="#booking-management">Booking Management</a></li>
                <li><a href="#guest-management">Guest Management</a></li>
                <li><a href="#staff-management">Staff Management</a></li>
                <li><a href="#reports">Reports & Analytics</a></li>
                <li><a href="#settings">Settings</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Admin Dashboard</h1>
                <div class="user-info">
                    <span>Welcome, Admin</span>
                    <button>Logout</button>
                </div>
            </header>
            <section id="dashboard" class="content-section">
                <h2>Dashboard Overview</h2>
                <div class="stats">
                    <div class="stat-card">
                        <h3>Total Bookings</h3>
                        <p>120</p>
                    </div>
                    <div class="stat-card">
                        <h3>Available Rooms</h3>
                        <p>50</p>
                    </div>
                    <div class="stat-card">
                        <h3>Revenue</h3>
                        <p>$25,000</p>
                    </div>
                </div>
            </section>
            <section id="room-management" class="content-section">
                <h2>Room Management</h2>
                <div class="room-list">
                    <!-- Room list will be dynamically populated here -->
                </div>
                <button id="add-room">Add Room</button>
            </section>
            <!-- Add more sections for Booking Management, Guest Management, etc. -->
        </main>
    </div>
    <script src="scripts.js"></script>
</body>
</html>