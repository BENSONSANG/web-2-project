<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .navbar {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 15px;
        }

        .navbar a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        .container {
            padding: 20px;
        }

        .form-group {
            margin: 15px 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .event {
            border: 1px solid #ddd;
            border-radius: 10px;
            background: white;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Event Management System</h1>
        <p>Manage events with ease!</p>
    </header>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="register.php">User Registration</a>
        <a href="events.php">Events</a>
        <a href="login.php">Admin Login</a>
        <a href="feedback.php">Feedback</a>
        <a href="reports.php">Reports</a>
    </div>

    <div class="container">
        <!-- User Registration Form -->
        <section id="register">
            <h2>User Registration</h2>
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="input-group">
                    <i class="fas fa-envelop"></i>
                    <input type="email" name="email" placeholder="Email" required>
                    <label for="email"> Email </label>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <button type="submit">Register</button>
            </form>
        </section>

        <!-- Events List -->
       <section id="events">
             <h2>Upcoming Events</h2>
            <div class="event">
             <h3>Tech Conference 2025</h3>
            <p><strong>Date:</strong> 20th March 2025</p>
             <p><strong>Venue:</strong> Nairobi Convention Center</p>
             <a href="book_ticket.php?event_id=1"><button>Book Ticket</button></a>
             </div>
             <div class="event">
              <h3>Sports Gala</h3>
              <p><strong>Date:</strong> 25th March 2025</p>
              <p><strong>Venue:</strong> Nakuru Stadium</p>
              <a href="book_ticket.php?event_id=2"><button>Book Ticket</button></a>
             </div>
        </section>

        <!-- Feedback Form -->
        <section id="feedback">
            <h2>Feedback</h2>
            <form method="POST" action="feedback.php">
               <input type="hidden" name="event_id" value="1"> <!-- Change dynamically -->
               <select name="rating">
               <option value="1">1 - Poor</option>
               <option value="2">2 - Fair</option>
               <option value="3">3 - Good</option>
               <option value="4">4 - Very Good</option>
               <option value="5">5 - Excellent</option>
               </select>
               <textarea name="comment" placeholder="Write a review"></textarea>
               <button type="submit">Submit Feedback</button>
            </form>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Event Management System. All rights reserved.</p>
    </footer>
</body>
</html>