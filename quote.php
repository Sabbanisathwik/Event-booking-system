<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            padding: 20px;
            border: 2px solid white;
            border-radius: 10px;
            width: 400px;
        }

        h1 {
            color: white;
            font-weight: bold;
            text-align: center;
        }

        label {
            color: red;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff6347; /* Lighter shade of red */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>GET YOUR QUOTE IN TASK</h1>
        <form action="process_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="phone">Phone number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>
            
            <label>Type of event that you are planning for:</label><br>
            <input type="radio" id="college_event" name="event_type" value="College event" required>
            <label for="college_event">College event</label><br>
            
            <input type="radio" id="concert" name="event_type" value="Concert" required>
            <label for="concert">Concert</label><br>
            
            <input type="radio" id="sports_event" name="event_type" value="Sports event" required>
            <label for="sports_event">Sports event</label><br>
            
            <input type="radio" id="birthday_event" name="event_type" value="Birthday event" required>
            <label for="birthday_event">Birthday event</label><br>
            
            <input type="radio" id="cricket_event" name="event_type" value="Cricket event" required>
            <label for="cricket_event">Cricket event</label><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
