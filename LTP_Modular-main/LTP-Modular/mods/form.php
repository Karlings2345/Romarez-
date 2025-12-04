<!DOCTYPE html>
<html>
<head>
    <title>Example Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 40px;
        }

        .form-container {
            background: #fff;
            padding: 25px 30px;
            max-width: 450px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            background: #4CAF50;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Contact Form</h1>
        <form action="submit.php" method="post">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
