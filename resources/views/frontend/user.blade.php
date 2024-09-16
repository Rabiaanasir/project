<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Logout button styling */
        .logout-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome, <!-- Use PHP code to print the authenticated user's username -->
            <?php echo htmlspecialchars(Auth::user()->username); ?>!
        </h1>

        <form action="/logout" method="POST">
            <!-- Laravel's CSRF token for form security -->
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

</body>
</html>
